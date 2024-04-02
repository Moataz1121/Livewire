<?php

namespace App\Livewire\Front\Component;

use App\Models\Service;
use Livewire\Component;

class ServicesOneCompnent extends Component
{
    
    public function render()
    {
        return view('front.component.services-one-compnent' , ['services' => Service::take(3)->get()]);
    }
}
