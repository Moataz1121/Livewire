<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skills;
use Livewire\Component;

class CreateSkills extends Component
{
    public $name ,$progress;
    public function rules(){
        return [
            'name' =>'required|string',
            'progress' => 'required|numeric'
        ];
    }
    public function submit(){
        //dd('Success');
        //to store data in db
       $data = $this->validate();
       Skills::create($data);
       // reset the value of inputs
       $this->reset(['name' , 'progress']);
       //to make the window off when you submit it is js and use dispatch
       $this->dispatch('createModelToogle');
       // to make a dynamic refresh
       $this->dispatch('refreshPage')->to(SkillsData::class);
    }
    public function render()
    {
        return view('admin.skills.create-skills');
    }
}
