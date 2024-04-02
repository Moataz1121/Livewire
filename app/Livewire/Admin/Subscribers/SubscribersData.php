<?php

namespace App\Livewire\Admin\Subscribers;

use App\Models\Subscribers;
use Livewire\Component;
use Livewire\WithPagination;

class SubscribersData extends Component
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
        return view('admin.subscribers.subscribers-data', ['data'=> Subscribers::where('email', 'like','%' . $this->search . '%')->paginate(1)]);
    }

}
