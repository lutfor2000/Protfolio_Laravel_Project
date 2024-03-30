<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CotractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//===============Contact Address Part Data=============================================>       
        DB::table('contacts')->insert([
            'contact_name' => 'contact_title',
            'contact_value' => ' Far away, behind the word mountains, far from the countries Vokalia and Consonantia'
        ]);
       
        DB::table('contacts')->insert([
            'contact_name' => 'cont_add_icon',
            'contact_value' => 'icon-map-signs'
        ]);
       
        DB::table('contacts')->insert([
            'contact_name' => 'cont_add_title',
            'contact_value' => 'Address'
        ]);

        DB::table('contacts')->insert([
            'contact_name' => 'cont_add_info',
            'contact_value' => '198 West 21th Street, Suite 721 New York NY 10016'
        ]);
       
//===============Contact Phone Part Data=============================================>
        DB::table('contacts')->insert([
            'contact_name' => 'cont_phone_icon',
            'contact_value' => 'icon-phone2'
        ]);
       
        DB::table('contacts')->insert([
            'contact_name' => 'cont_phone_title',
            'contact_value' => 'Contact Number'
        ]);
       
        DB::table('contacts')->insert([
            'contact_name' => 'cont_phone_info',
            'contact_value' => '+8801798960830'
        ]);

//===============Contact Email Part Data=============================================>       
        DB::table('contacts')->insert([
            'contact_name' => 'cont_email_icon',
            'contact_value' => 'icon-paper-plane'
        ]);

        DB::table('contacts')->insert([
            'contact_name' => 'cont_email_title',
            'contact_value' => 'Email Address'
        ]);

        DB::table('contacts')->insert([
            'contact_name' => 'cont_email_info',
            'contact_value' => 'lutfar@gmail.com'
        ]);

//===============Contact WebSite Part Data=============================================>             
        DB::table('contacts')->insert([
            'contact_name' => 'cont_web_icon',
            'contact_value' => 'icon-globe'
        ]);

        DB::table('contacts')->insert([
            'contact_name' => 'cont_web_title',
            'contact_value' => 'Website'
        ]);

        DB::table('contacts')->insert([
            'contact_name' => 'cont_web_info',
            'contact_value' => 'www.lrsweb.com'
        ]);
       




    }
}
