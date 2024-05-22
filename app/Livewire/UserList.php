<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;


class UserList extends Component
{
    public $display=false;


    #[On('post-created')]
    public function updatePostList()
    {
        sleep(5);
        if(!$this->display){
            $this->display=true;
        }else{
            $this->display=false;
        }

    }

    public function render()
    {
        $users = \App\Models\User::all();
        $display = $this->display;
      //  dd($display);

        return view('livewire.user-list', compact('users','display'));
    }

    public function refreshSubscribers(){



    }
}
