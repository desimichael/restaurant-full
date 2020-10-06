<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SeoSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seo_settings')->insert([
            'description' => "Is franchised and adds value to any entrepreneur striving to break into the leisure and entertainment industry.",
            'keywords' => "Burgers, Local Burgers, Billiards, Sports, Hookahs, Pool",
            
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
