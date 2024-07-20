<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class Index extends Component
{

    use WithPagination, WithoutUrlPagination;

    public function render()
    {
        return view('livewire.users.index', [
            'users' => User::first()->paginate(5)
        ])->extends('layouts.app')->section('content');
    }
}
