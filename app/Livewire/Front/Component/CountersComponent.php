<?php

namespace App\Livewire\Front\Component;

use App\Models\Counter;
use Livewire\Component;

class CountersComponent extends Component
{
    public $counters;
    public function mount(){
    $this->counters = Counter::take(4)->get();
    }

    public function render()
    {
      //  $this->counters = Counter::take(3)->get();

        return view('front.component.counters-component');
    }
}
