<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_settings')->insert([
            'site_title' => 'Tonys',
            'logo_image_url' => '/img/tonys_logo.png',
            'address_1' => '8610 Roswell Road',
            'address_2' => '',
            'city' => 'Sandy Springs',
            'state' => ' Georgia',
            'zipcode' => '30350',
            'phone_number' => '770-552-2233',
            
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
