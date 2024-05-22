<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\On;





class Dashboard extends Component
{


    #[On('post-created')]
    public function updatePostList($title)
    {
        dd("ggg");
    }

    public function render()
    {


        return view('livewire.admin.dashboard');
    }



}
