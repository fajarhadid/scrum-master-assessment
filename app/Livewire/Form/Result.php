<?php

namespace App\Livewire\Form;

use App\Models\Result as ModelsResult;
use Livewire\Component;

class Result extends Component
{

    public $results = [];

    public function mount()
    {
        $this->results = ModelsResult::where("user_id", auth()->user()->id)->get();
    }

    public function render()
    {
        return view('livewire.form.result')->extends('layouts.app')->section('content');
    }
}
