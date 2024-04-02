<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;

class ProjectsDelete extends Component
{
    public $project;
    protected $listeners = ['deleteSkills'];
    public function deleteSkills($id){
        $this->project = Project::find($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit(){
        unlink($this->project->image);
        $this->project->delete();
        $this->reset('project');
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshPage')->to(ProjectsData::class);

    }
    public function render()
    {
        return view('admin.projects.projects-delete');
    }
}
