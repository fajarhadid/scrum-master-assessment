<?php

namespace App\Livewire\Skillsets;

use App\Models\Option;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Subskill extends Component
{

    use WithPagination, WithoutUrlPagination;

    public function destroy($id)
    {
        Option::destroy($id);
        session()->flash('message', 'Data Berhasil Dihapus');
        return redirect()->route('skillsets.subskill');
    }

    public function render()
    {
        return view('livewire.skillsets.subskill', [
            'sub_skills' => Option::first()->paginate(10)
        ])->extends('layouts.app')->section('content');
    }
}
