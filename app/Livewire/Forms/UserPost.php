<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class UserPost extends Form
{

    #[Validate('required')]
    public $first_name = '';

    #[Validate('required')]
    public $last_name = '';

//    #[Validate('required|email|unique:users')]
//    public $email = '';

    #[Validate('required')]
    public $password = '';

    #[Validate('image|max:1024')]
    public $photo;




}
