<?php

namespace App\Livewire\Form;

use App\Models\Answer;
use App\Models\Option;
use App\Models\Question;
use App\Models\Result;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Penilaian extends Component
{
    public int $current = 1;
    public ?Collection $questions;
    public ?Collection $options;

    public function mount()
    {
        $this->questions = Question::with("options")->get()->keyBy("order");
        $this->options = Option::all()->keyBy("id")->map(fn ($option) => [
            "question_id" => $option->question_id,
            "id" => $option->id,
            "nama_skill" => $option->nama_skill,
            "value" => $option->value,
            "state" => false,
        ]);
    }

    public function render()
    {
        return view('livewire.form.penilaian')->extends('layouts.app')->section('content');
    }

    public function changeQuestion(int $question)
    {
        if ($question < 1) {
            $this->redirect('/');
        } elseif ($this->current >= $this->questions->last()->order) {
            $this->submit();
        } else {
            $this->current = $question;
        }
    }

    public function submit()
    {
        $score = $this->calculateTotal();

        try {
            DB::beginTransaction();

            $result = Result::create([
                "user_id" => auth()->user()->id,
                "name" => auth()->user()->name,
                "position" => "Scrum Master",
                "score" => $score,
            ]);

            $filteredOptions = $this->options->filter(fn ($opt) => $opt["state"]);
            foreach ($filteredOptions as $option) {
                Answer::create([
                    "result_id" => $result->id,
                    "option_id" => $option["id"],
                ]);
            }
            // dd($result);
            DB::commit();

            $this->redirectRoute("hasil");
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e);
        }
    }

    public function calculateTotal()
    {
        return $this->options->filter(fn ($opt) => $opt["state"])->pluck("value")->sum() ?? 0;
    }
}
