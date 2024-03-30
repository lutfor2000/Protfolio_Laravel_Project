<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            'setting_name' => 'resume',
            'setting_value' => 'A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.'
        ]);

        DB::table('settings')->insert([
            'setting_name' => 'services',
            'setting_value' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia'
        ]);

        DB::table('settings')->insert([
            'setting_name' => 'my_skill',
            'setting_value' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia'
        ]);

        DB::table('settings')->insert([
            'setting_name' => 'our_project',
            'setting_value' => 'Our Project, behind the word mountains, far from the countries Vokalia and Consonantia'
        ]);

        DB::table('settings')->insert([
            'setting_name' => 'our_blog',
            'setting_value' => 'Our Blog, behind the word mountains, far from the countries Vokalia and Consonantia'
        ]);

    }
}
