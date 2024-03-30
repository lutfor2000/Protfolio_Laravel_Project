<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('aboutsettings')->insert([
            'about_setting_name' => 'name',
            'about_setting_value' => 'Lutfor Rhaman'
        ]);
        DB::table('aboutsettings')->insert([
            'about_setting_name' => 'about_description',
            'about_setting_value' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia.'
        ]);
        DB::table('aboutsettings')->insert([
            'about_setting_name' => 'date_of_birth',
            'about_setting_value' => 'Augest 08 2000'
        ]);
        DB::table('aboutsettings')->insert([
            'about_setting_name' => 'address',
            'about_setting_value' => 'Badarganj, Rangpur,Road No : 02'
        ]);
        DB::table('aboutsettings')->insert([
            'about_setting_name' => 'zip_code',
            'about_setting_value' => '200'
        ]);
        DB::table('aboutsettings')->insert([
            'about_setting_name' => 'email',
            'about_setting_value' => 'lutfar199296@gmail.com'
        ]);
        DB::table('aboutsettings')->insert([
            'about_setting_name' => 'phone_number',
            'about_setting_value' => '01798960830'
        ]);
        DB::table('aboutsettings')->insert([
            'about_setting_name' => 'complete_project',
            'about_setting_value' => '12'
        ]);
    }
}
