<?php

namespace App\Livewire\Front\Component;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;

class PrpjectComponent extends Component
{
    public function render()
    {
        return view('front.component.prpject-component', [
            'projects' => Project::all(),
            'category' => Category::all(),
        ]);
    }
}
