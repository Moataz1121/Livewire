<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProjectsUpdate extends Component
{
    use WithFileUploads;

    public $project ,$name ,$link ,$descreption,$image,$category_id ,$categories;
    protected $listeners = ['counterUpdate'];
    public function mount(){
        $this->categories =Category::all();
    }
    public function counterUpdate($id){
      //  dd($id);
      $this->project = Project::find($id);
      $this->name = $this->project->name;
      $this->link = $this->project->link;
      $this->descreption = $this->project->descreption;
      $this->category_id = $this->project->category_id;
      $this->resetValidation();
      $this->dispatch('editcreate');
    }

    public function rules(){
        return [
            'name' =>'required|string',
            'descreption' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png,gif',
            'link' => 'nullable|url',
            'category_id' => 'required|exists:categories,id',
        ];
    }
    public function attributes()
    {
        return [
            'category_id' => 'Category',
        ];
    }
    public function submit(){
        //dd('Success');
        //to store data in db
       $data = $this->validate($this->rules() , [] , $this->attributes());
       if ($this->image) {
        unlink($this->project->image);
        $imageName = time() . '.' . $this->image->getClientOriginalExtension();
        $this->image->storeAs('images', $imageName, 'public');
        $data['image'] = 'storage/images/' . $imageName;
        }
        else
        {
        unset($data['image']);
        }
       $this->skill->update($data);
       // reset the value of inputs
       //to make the window off when you submit it is js and use dispatch
       $this->dispatch('editcreate');
       // to make a dynamic refresh
       $this->dispatch('refreshPage')->to(ProjectsData::class);
    }
    public function render()
    {
        return view('admin.projects.projects-update');
    }
}
