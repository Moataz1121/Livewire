<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;

class MessagesData extends Component
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
        return view('admin.messages.messages-data', ['data'=> Message::where('name', 'like','%' . $this->search . '%')->paginate(4)]);
    }


}
