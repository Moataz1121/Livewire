<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CountersUpdate extends Component
{
    public $counter ,$name ,$count ,$icon;
    protected $listeners = ['counterUpdate'];
    public function counterUpdate($id){
      //  dd($id);
      $this->counter = Counter::find($id);
      $this->name = $this->counter->name;
      $this->count = $this->counter->count;
      $this->icon = $this->counter->icon;
      $this->resetValidation();
      $this->dispatch('editcreate');
    }
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
       $this->counter->update($data);
       // reset the value of inputs
       //to make the window off when you submit it is js and use dispatch
       $this->dispatch('editcreate');
       // to make a dynamic refresh
       $this->dispatch('refreshPage')->to(CountersData::class);
    }
    public function render()
    {
        return view('admin.counters.counters-update');
    }
}
