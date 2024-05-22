<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class Modal extends Component
{
    public $show=false;
    public $user;

    #[On('model-show')]
    public function modelShow($id){
      $this->user=User::find($id);
       $this->show=true;
    }
    public function showClose(){
        $this->show=false;
    }
    public function render()
    {
        return view('livewire.admin.modal',['user'=>$this->user,'show'=>$this->show]);
    }
}
