<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;

class MessagesDelete extends Component
{
    public $counter;
    protected $listeners = ['deleteSkills'];
    public function deleteSkills($id){
        $this->counter = Message::find($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit(){
        $this->counter->delete();
        $this->reset('counter');
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshPage')->to(MessagesData::class);

    }
    public function render()
    {
        return view('admin.messages.messages-delete');
    }
}
