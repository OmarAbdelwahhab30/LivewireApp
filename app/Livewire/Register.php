<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Register extends Component
{

    use WithFileUploads;
    public array $form = [
        'username' => '',
        'password'  => '',
        'cpassword' => '',
        'email' => '',
        'image' => '',
    ];

    public array $rules = [
        'form.username' => 'required|min:6|max:20|unique:users,username',
        'form.password'  => "required|min:6|max:20",
        "form.cpassword" => 'required|same:form.password',
        "form.email"     => "required|email|unique:users,email",
        "form.image"     => 'nullable|mimes:jpeg,png,jpg',
    ];
    public function render()
    {
        return view('livewire.register');
    }


    public function register(){
        $data = $this->validate($this->rules);
        $image = str_replace("photos/", "", $this->form['image']->store("photos",'public'));
        $data['form']['image'] = $image;
        $user = User::create($data['form']);
        if ($user != null) {
            auth()->login($user);
            return redirect(route("home"));
        }
        return redirect()->back()->with("error", "something went wrong!");
    }
}
