<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Carbon\Carbon;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;




class PostUser extends Component
{
    use WithFileUploads,LivewireAlert;

    public $userList=false;

    #[Validate('nullable|image|max:1024')]
    public $photo;

    #[Validate('required')]
    public $first_name = '';

    #[Validate('required')]
    public $last_name = '';

    #[Validate('required|email|unique:users')]
    public $email = '';

    #[Validate('required')]
    public $password = '';
//   #[Validate('required')]
    public $bod='';

//    #[Validate('required')]
    public $gender='';



    #[Computed]
    public function users()
    {

        return User::all();
    }
    function postSave()
    {


        $this->validate();

        $name=null;
        if($this->photo){
            $name = md5($this->photo . microtime()).'.'.$this->photo->extension();
            $this->photo->storeAs(path: 'public/photos', name: $name);
        }


        $user=new User();
        $user->first_name=$this->first_name;
        $user->last_name=$this->last_name;
        $user->email=$this->email;
        $user->password=$this->password;
        $user->profile_image=$name;
        $user->gender=$this->gender;
        $user->birth_date=$this->bod;
        $user->save();


        $this->userList=true;
        $this->dispatch('show-notifications',type:'success',message:'User saved successfully');
        $this->reset();



    }




    function render()
    {
        return view('livewire.admin.user.post-user');
    }



}
