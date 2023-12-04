<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Home extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.home',[
            'users' => User::paginate(5),
        ]);
    }

    public function remove($userid){
        $user = User::find($userid);
        $user->delete();
    }

}
