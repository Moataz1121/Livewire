<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoriesDelete extends Component
{
    public $counter;
    protected $listeners = ['deleteSkills'];
    public function deleteSkills($id){
        $this->counter = Category::find($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit(){
        $this->counter->delete();
        $this->reset('counter');
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshPage')->to(CategoriesData::class);

    }
    public function render()
    {
        return view('admin.categories.categories-delete');
    }
}
