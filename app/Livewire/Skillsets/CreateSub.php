<?php

namespace App\Livewire\Skillsets;

use App\Models\Option;
use Livewire\Component;
use Livewire\Attributes\Rule;

class CreateSub extends Component
{
    #[Rule('required', message: 'Masukkan Nama Skill')]
    public $question_id;

    #[Rule('required', message: 'Masukkan Urutan Pertanyaan')]
    public $nama_skill;

    #[Rule('required', message: 'Masukkan Urutan Pertanyaan')]
    public $value;


    public function storesub()
    {
        $this->validate();
        Option::create([
            'nama_skill' => $this->nama_skill,
            'value' => $this->value,
        ]);

        session()->flash('message', 'Data Berhasil Ditambahkan');
        return redirect()->route('skillsets.subskill');
    }
    public function render()
    {
        return view('livewire.skillsets.create-sub')->extends('layouts.app')->section('content');
    }
}
