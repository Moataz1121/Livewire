<?php

namespace App\Livewire\Admin\Subscribers;

use App\Models\Subscribers;
use Livewire\Component;

class SubscribersDelete extends Component
{
    public $subscriber;
    protected $listeners = ['deleteSkills'];
    public function deleteSkills($id){
        $this->subscriber = Subscribers::find($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit(){
        $this->subscriber->delete();
        $this->reset('subscriber');
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshPage')->to(SubscribersData::class);
    }

    public function render()
    {
        return view('admin.subscribers.subscribers-delete');
    }
}
