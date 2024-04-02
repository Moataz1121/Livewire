<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesCreate extends Component
{
    public $name ,$descreption ,$icon;
    public function rules(){
        return [
            'name' =>'required|string',
            'descreption' => 'required|string',
            'icon' => 'required',
        ];
    }
    public function submit(){
        //dd('Success');
        //to store data in db
       $data = $this->validate();
       Service::create($data);
       // reset the value of inputs
       $this->reset(['name' , 'descreption' ,'icon']);
       //to make the window off when you submit it is js and use dispatch
       $this->dispatch('createModelToogle');
       // to make a dynamic refresh
       $this->dispatch('refreshPage')->to(ServicesData::class);
    }
    public function render()
    {

        return view('admin.services.services-create');
    }
}
