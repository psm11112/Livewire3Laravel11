<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\On;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class DisplayMessage extends Component
{
    public $show=false;
    use LivewireAlert;

    #[On('show-notifications')]
    public function showNotification($type,$message){

        $this->alert($type, $message, [
            'position' => 'top-end',
            'timerProgressBar' => true,
        ]);



    }
    public function render()
    {

        return view('livewire.admin.display-message');
    }
}
