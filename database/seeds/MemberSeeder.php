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
            'fname' => 'Jenna',
            'email' => 'jw@gmail.com',
            'lname' => 'Wolf',
            'phone_number' => '1234345678',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
