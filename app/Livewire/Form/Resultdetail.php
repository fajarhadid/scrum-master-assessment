<?php

namespace App\Livewire\Form;

use App\Models\Option;
use App\Models\Question;
use App\Models\Result as ResultModel;
use Illuminate\Support\Collection;
use Livewire\Component;

class Resultdetail extends Component
{

    public int $current = 1;

    public ResultModel $result;
    public ?Collection $questions;
    public ?Collection $options;

    public function mount(ResultModel $result)
    {
        $this->result = $result;
        $answers = collect($result->answers->pluck("option_id"));
        $this->questions = Question::with("options")->get()->keyBy("order");
        $this->options = Option::all()->keyBy("id")->map(fn ($option) => [
            "question_id" => $option->question_id,
            "id" => $option->id,
            "nama_skill" => $option->nama_skill,
            "value" => $option->value,
            "state" => $answers->contains($option->id),
        ]);

        //dd($this->options);
    }

    public function changeQuestion(int $question)
    {
        if ($question >= 1 && $this->current <= $this->questions->last()->order) {
            $this->current = $question;
        } else if ($question < 1) {
            return redirect()->route('hasil');
        }
    }

    public function render()
    {
        return view('livewire.form.resultdetail')->extends('layouts.app')->section('content');
    }
}
