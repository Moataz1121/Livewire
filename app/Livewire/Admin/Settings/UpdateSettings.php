<?php

namespace App\Livewire\Admin\Settings;

use App\Models\Setting;
use Livewire\Component;

class UpdateSettings extends Component
{
    // to initialize the varaible model
    public $settings;
    public function mount(){
        $this->settings = Setting::find(1);
    }
    // if you want validate so make rules :)
    public function rules(){
        return [
            'settings.name' => 'required|string',
            'settings.email' => 'required|email',
            'settings.adrress' => 'required',
            'settings.phone' => 'required',
            'settings.facebook' => 'nullable|url',
            'settings.twitter' => 'nullable|url',
            'settings.linkedin' => 'nullable|url',
            'settings.instgram' => 'nullable|url',
        ];
    }
    public function submit(){
      //  dd('Submit');
      $this->validate();
      $this->settings->save();
      session()->flash('message','Updated Successfuly');
    }
    public function render()
    {
        return view('admin.settings.update-settings');
    }
}
