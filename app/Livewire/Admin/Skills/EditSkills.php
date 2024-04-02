<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skills;
use Livewire\Component;

class EditSkills extends Component
{
    public $skill ,$name ,$progress;
    protected $listeners = ['skillUpdate'];
    public function skillUpdate($id){
      //  dd($id);
      $this->skill = Skills::find($id);
      $this->name = $this->skill->name;
      $this->progress = $this->skill->progress;
      $this->resetValidation();
      $this->dispatch('editcreate');
    }
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
       $this->skill->update($data);
       // reset the value of inputs
       //to make the window off when you submit it is js and use dispatch
       $this->dispatch('editcreate');
       // to make a dynamic refresh
       $this->dispatch('refreshPage')->to(SkillsData::class);
    }
    public function render()
    {
        return view('admin.skills.edit-skills');
    }
}
