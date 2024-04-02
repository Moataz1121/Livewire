<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesShow extends Component
{
    public $name ,$descreption;
    protected $listeners = ['showSkills'];
    public function showSkills($id){
        $recored = Service::find($id);
        $this->name = $recored->name;
        $this->descreption = $recored->descreption;
        $this->dispatch('showModalToggle');
    }
    public function render()
    {
        return view('admin.services.services-show');
    }
}
