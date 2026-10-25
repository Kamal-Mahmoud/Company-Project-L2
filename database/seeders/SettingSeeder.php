<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate(
            ['id' => 1],
            [
                'address' => '123 Main St, City, Country',
                'phone' => '+1 (555) 123-4567',
                'email' => 'info@company.com',
            ]
        );
    }
}
