<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Attributes\Computed;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;






class UserList extends Component
{
    use LivewireAlert,WithPagination;

    public $status=true;
    public $modelShow=false;
    public $show=false;
    public $search='';


    #[Computed]
    public function users()
    {



        $users = User::query()
            ->when(
                $this->search,
                function(Builder $builder) {
                    $builder->where('email', 'like', "%{$this->search}%")
                        ->orWhere('first_name', 'like', "%{$this->search}%")
                        ->orWhere('last_name', 'like', "%{$this->search}%");
                }
            )->paginate(5);


        return $users;

      //  return User::where('email','like','%'.$this->serach.'%')->paginate(10);
    }


    public function changeStatus($id){
        $user=User::find($id);
        $user->is_active=$user->is_active?0:1;
        $user->save();
       $this->dispatch('show-notifications',type:'success',message:'User status successfully changed');
    }

    public function showOpen($id){
        $this->dispatch('model-show',id:$id);
    }









    public function render()
    {


        return view('livewire.admin.user.user-list',['show'=>$this->show]);
    }

    public function fr(){
       $this->dispatch('post-created');

    }
}
