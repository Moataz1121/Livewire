<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skills;
use Livewire\Component;
use Livewire\WithPagination;

class SkillsData extends Component
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
        return view('admin.skills.skills-data', ['data'=> Skills::where('name', 'like','%' . $this->search . '%')->paginate(4)]);
    }
}
