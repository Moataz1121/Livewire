<?php

namespace App\Livewire\Front\Component;

use App\Models\Service;
use Livewire\Component;

class ServicesTwoComopnent extends Component
{
    public function render()
    {
        return view('front.component.services-two-comopnent', ['services' => Service::take(6)->get()]);
    }
}
