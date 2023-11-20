<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.login')]
class Login extends Component
{
    protected $email;
    protected $password;

    public function login()
    {
        dd('i am in login');
    }
    public function render()
    {
        return view('livewire.auth.login')->layout('components.layouts.adminlogin');
    }
}
