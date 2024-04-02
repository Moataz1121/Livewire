<?php

namespace App\Livewire\Front\Component;

use App\Models\Message;
use Livewire\Component;

class MessageComponent extends Component
{
    public $name,$email,$message,$subject;
    public function rules(){
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ];
    }
    public function submit(){
        $data = $this->validate();
        Message::create($data);
        $this->reset('name' , 'email' , 'subject' , 'message');
        session()->flash('message' , 'Sent Successfuly');
    } 
    public function render()
    {
        return view('front.component.message-component');
    }
}
