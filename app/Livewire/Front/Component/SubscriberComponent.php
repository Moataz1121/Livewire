<?php

namespace App\Livewire\Front\Component;

use App\Models\Subscribers;
use Livewire\Component;

class SubscriberComponent extends Component
{
    public $email;
    public function rules(){
        return [
            'email' => 'required|email',
        ];
    }
    public function submit(){
        $this->validate();
        Subscribers::create(['email' => $this->email]);
        $this->reset('email');
        session()->flash('message' , 'Uploaded Successfuly');
    }
    public function render()
    {
        return view('front.component.subscriber-component');
    }
}
