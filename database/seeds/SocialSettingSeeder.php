<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SocialSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_settings')->insert([
            'facebook_url' => 'https://www.facebook.com/tonyssportsbars',
            'twitter_url' => 'https://twitter.com/tonyssportsbar',
            'instagram_url' => 'https://www.instagram.com/tonysportsbar',
            
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
