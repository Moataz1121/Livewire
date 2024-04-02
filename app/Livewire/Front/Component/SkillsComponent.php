<?php

namespace App\Livewire\Front\Component;

use App\Models\Skills;
use Livewire\Component;

class SkillsComponent extends Component
{
    public function render()
    {
        return view('front.component.skills-component' ,['skills' => Skills::take(3)->get()]);
    }
}
