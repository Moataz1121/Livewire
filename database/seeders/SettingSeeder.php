<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate([
            'email' => 'test@test.com'
        ],[
            'name' => 'Digtal',
            'phone' => '01126240502',
            'adrress' => 'New Cairo',
        ]);
    }
}
