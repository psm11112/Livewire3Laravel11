<?php

namespace App\Livewire\Frontend;
use Livewire\Attributes\Layout;

use Livewire\Component;

class Home extends Component
{

    public $showMenu=false;
    #[Layout('layouts.frontend')]

    public function showSubMenu(){
        $this->showMenu= $this->showMenu ?false:true;
    }

    public function render()
    {
        return view('frontend.home',[
            'showMenu'=>$this->showMenu
        ]);
    }
}
