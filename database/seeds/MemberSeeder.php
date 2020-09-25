<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'fname' => 'jenny',
            'lname' => 'jane',
            'email' => 'jj@gmail.com',
            'phone_number' => '4354456762',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
