<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CountersDelete extends Component
{
    public $counter;
    protected $listeners = ['deleteCounter'];
    public function deleteCounter($id){
        $this->counter = Counter::find($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit(){
        $this->counter->delete();
        $this->reset('counter');
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshPage')->to(CountersData::class);

    }
    public function render()
    {
        return view('admin.counters.counters-delete');
    }
}
