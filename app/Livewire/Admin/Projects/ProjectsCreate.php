<?php

namespace App\Livewire\Admin\Projects;
use Storage;
use File;
use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProjectsCreate extends Component
{
    use WithFileUploads;
    public $name ,$link ,$descreption,$image,$category_id ,$categories;
    public function mount(){
        $this->categories =Category::all();
    }
    public function rules(){
        return [
            'name' =>'required|string',
            'descreption' => 'required|string',
            'image' => 'required|image|mimes:jpg,png,pdf',
            'link' => 'nullable|url',
            'category_id' => 'required|exists:categories,id',
        ];
    }
    public function attributes(){
        return [
            'category_id' => 'Category'
        ];
    }
    public function submit(){
        //dd('Success');
        //to store data in db
       $data = $this->validate($this->rules(), [] , $this->attributes());
       $imageName = time() . '.' . $this->image->getClientOriginalExtension();
       $this->image->storeAs('images', $imageName, 'public');
     //  $data['image'] = 'storage/images/' . $imageName;

        $data['image'] = 'storage/images' . $imageName;
       Project::create($data);
       // reset the value of inputs
       $this->reset(['name' , 'link' , 'descreption' , 'image' , 'category_id']);
       //to make the window off when you submit it is js and use dispatch
       $this->dispatch('createModelToogle');
       // to make a dynamic refresh
       $this->dispatch('refreshPage')->to(ProjectsData::class);
    }
    public function render()
    {
        return view('admin.projects.projects-create');
    }
}
