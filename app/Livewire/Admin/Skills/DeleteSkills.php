<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skills;
use Livewire\Component;

class DeleteSkills extends Component
{
    public $skill;
    protected $listeners = ['deleteSkills'];
    public function deleteSkills($id){
        $this->skill = Skills::find($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit(){
        $this->skill->delete();
        $this->reset('skill');
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshPage')->to(SkillsData::class);

    }
    public function render()
    {
        return view('admin.skills.delete-skills');
    }
}
