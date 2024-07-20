<?php

namespace App\Livewire\Skillsets;

use App\Models\Question;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Create extends Component
{
    #[Rule('required', message: 'Masukkan Nama Skill')]
    public $text;

    #[Rule('required', message: 'Masukkan Urutan Pertanyaan')]
    public $order;

    public function store()
    {
        $this->validate();
        Question::create([
            'text' => $this->text,
            'order' => $this->order,
        ]);

        session()->flash('message', 'Data Berhasil Ditambahkan');
        return redirect()->route('skillsets.index');
    }

    public function render()
    {
        return view('livewire.skillsets.create')->extends('layouts.app')->section('content');
    }
}
