<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteSetting::create([
            'name'=>'adres',
            'data'=>'Samsun Adres bilgilerim burada',
        ]);

        SiteSetting::create([
            'name'=>'phone',
            'data'=>'0555 555 555',
        ]);

        SiteSetting::create([
            'name'=>'email',
            'data'=>'cefiraty@gmail.com',
        ]);

        SiteSetting::create([
            'name'=>'harita',
            'data'=>null,
        ]);
    }
}
