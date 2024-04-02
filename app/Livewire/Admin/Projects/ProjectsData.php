<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectsData extends Component
{
    use WithPagination;
    protected $listeners = ['refreshPage' => '$refresh'];
    public $search;
    public function updatingSearch(){
        //to make search is well in any page
        $this->resetPage();
    }
    public function render()
    {
        return view('admin.projects.projects-data', ['data'=> Project::where('name', 'like','%' . $this->search . '%')->paginate(4)]);
    }

}
