<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('footers')->insert([
            'footer_name' => 'about_addres',
            'footer_value' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.'
        ]);

        DB::table('footers')->insert([
            'footer_name' => 'footer_location',
            'footer_value' => 'Badarganj,Rangpur,Dhaka'
        ]);

        DB::table('footers')->insert([
            'footer_name' => 'footer_phone',
            'footer_value' => '01798960830'
        ]);

        DB::table('footers')->insert([
            'footer_name' => 'footer_email',
            'footer_value' => 'lut@22gmail.com'
        ]);

        DB::table('footers')->insert([
            'footer_name' => 'twiter_link',
            'footer_value' => 'twitter.com'
        ]);

        DB::table('footers')->insert([
            'footer_name' => 'faceboock_link',
            'footer_value' => 'faceboock.com'
        ]);
        
        DB::table('footers')->insert([
            'footer_name' => 'instagram_link',
            'footer_value' => 'instagram.com'
        ]);


    }
}
