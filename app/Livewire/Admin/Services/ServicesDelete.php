<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesDelete extends Component
{
    public $services;
    protected $listeners = ['deleteCounter'];
    public function deleteCounter($id){
        $this->services = Service::find($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit(){
        $this->services->delete();
        $this->reset('services');
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshPage')->to(ServicesData::class);

    }
    public function render()
    {
        return view('admin.services.services-delete');
    }
}
