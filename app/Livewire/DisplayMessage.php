<?php

namespace App\Livewire;

use Livewire\Component;

class DisplayMessage extends Component
{
    public function render()
    {
        return view('livewire.display-message');
    }

    public function visibalemessage(){
        $this->dispatch('post-created');
    }
}
