<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skills;
use Livewire\Component;

class ShowSkills extends Component
{
    public $name ,$progress;
    protected $listeners = ['showSkills'];
    public function showSkills($id){
        $recored = Skills::find($id);
        $this->name = $recored->name;
        $this->progress = $recored->progress;
        $this->dispatch('showModalToggle');
    }

    public function render()
    {
        return view('admin.skills.show-skills');
    }
}
