<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public array $form = [
        'username' => '',
        'password'  => '',
    ];

    public array $rules = [
        'form.username' => 'required|exists:users,username',
        'form.password' => 'required'
    ];
    public function render()
    {
        return view('livewire.login');
    }

    public function login(){
        $validated = $this->validate($this->rules);
        if (Auth::attempt($validated['form'])){
            $user = new User($validated['form']);
            $user = User::where("username",$user->username)->first();
            auth()->login($user);
            return redirect(route("home"));
        }
        return redirect(route("login"))->with("error","something wrong");
    }
}
