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
            'fname' => 'jenna',
            'lname' => 'wolf',
            'email' => 'jw@gmail.com',
            'phone_number' => '5554446676',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
