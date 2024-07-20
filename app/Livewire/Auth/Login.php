<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email, $password;

    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.app')->section('content');
    }

    public function rules()
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ];
    }

    public function loginUser()
    {
        $this->validate();

        if (!Auth::attempt($this->only(['email', 'password']))) {
            session()->flash('error', 'Alamat Email atau Password Anda salah!.');
            return redirect()->to('login');
        } else {
            return redirect()->to('admin');
        }
    }
}
