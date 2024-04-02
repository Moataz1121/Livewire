<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoriesUpdate extends Component
{
    public $categories ,$name ;
    protected $listeners = ['skillUpdate'];
    public function skillUpdate($id){
      //  dd($id);
      $this->categories = Category::find($id);
      $this->name = $this->categories->name;
      $this->resetValidation();
      $this->dispatch('editcreate');
    }
    public function rules(){
        return [
            'name' =>'required|string',

        ];
    }
    public function submit(){
        //dd('Success');
        //to store data in db
       $data = $this->validate();
       $this->categories->update($data);
       // reset the value of inputs
       //to make the window off when you submit it is js and use dispatch
       $this->dispatch('editcreate');
       // to make a dynamic refresh
       $this->dispatch('refreshPage')->to(CategoriesData::class);
    }
    public function render()
    {
        return view('admin.categories.categories-update');
    }
}
