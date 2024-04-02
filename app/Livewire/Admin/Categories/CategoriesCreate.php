<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoriesCreate extends Component
{
    public $name ;
    public function rules(){
        return [
            'name' =>'required|string',
        ];
    }
    public function submit(){
        //dd('Success');
        //to store data in db
       $data = $this->validate();
       Category::create($data);
       // reset the value of inputs
       $this->reset(['name']);
       //to make the window off when you submit it is js and use dispatch
       $this->dispatch('createModelToogle');
       // to make a dynamic refresh
       $this->dispatch('refreshPage')->to(Category::class);
    }
    public function render()
    {
        return view('admin.categories.categories-create');
    }
}
