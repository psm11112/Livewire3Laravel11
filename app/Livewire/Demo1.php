<?php

namespace App\Livewire;

use Livewire\Component;

class Demo1 extends Component
{

    public function shownotification(){
        $this->dispatch('gt');
    }
    public function render()
    {
        return view('livewire.demo1');
    }
}
