<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesUpdate extends Component
{
    public $services ,$name ,$descreption ,$icon;
    protected $listeners = ['serviceUpdate'];
    public function serviceUpdate($id){
      //  dd($id);
      $this->services = Service::find($id);
      $this->name = $this->services->name;
      $this->descreption = $this->services->count;
      $this->icon = $this->services->icon;
      $this->resetValidation();
      $this->dispatch('editcreate');
    }
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
       $this->skill->update($data);
       // reset the value of inputs
       //to make the window off when you submit it is js and use dispatch
       $this->dispatch('editcreate');
       // to make a dynamic refresh
       $this->dispatch('refreshPage')->to(ServicesData::class);
    }
    public function render()
    {
        return view('admin.services.services-update');
    }
}
