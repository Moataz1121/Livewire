<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;

class MessagesShow extends Component
{
    public $name ,$email, $subject,$message;
    protected $listeners = ['showSkills'];
    public function showSkills($id){
        $recored = Message::find($id);
        $this->name = $recored->name;
        $this->email = $recored->email;
        $this->subject = $recored->subject;
        $this->message = $recored->message;
        $recored->update(['status' => '1']);
        $this->dispatch('showModalToggle');
        $this->dispatch('refreshPage')->to(MessagesData::class);

    }

    public function render()
    {
        return view('admin.messages.messages-show');
    }
}
