<?php

namespace App\Livewire\Skillsets;

use App\Models\Question;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{

    use WithPagination, WithoutUrlPagination;

    public function destroy($id)
    {
        Question::destroy($id);
        session()->flash('message', 'Data Berhasil Dihapus');
        return redirect()->route('skillsets.index');
    }

    public function render()
    {
        return view('livewire.skillsets.index', [
            'main_skills' => Question::first()->paginate(10)
        ])->extends('layouts.app')->section('content');
    }
}
