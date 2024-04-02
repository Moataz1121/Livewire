<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;
use Livewire\WithFileUploads;

class CountersCreate extends Component
{
    use WithFileUploads;
    public $name ,$count ,$icon;
    public function rules(){
        return [
            'name' =>'required|string',
            'count' => 'required|numeric',
            'icon' => 'required',
        ];
    }
    public function submit(){
        //dd('Success');
        //to store data in db
       $data = $this->validate();
       Counter::create($data);
       // reset the value of inputs
       $this->reset(['name' , 'count']);
       //to make the window off when you submit it is js and use dispatch
       $this->dispatch('createModelToogle');
       // to make a dynamic refresh
       $this->dispatch('refreshPage')->to(CountersData::class);
    }
    public function render()
    {
        return view('admin.counters.counters-create');
    }
}
