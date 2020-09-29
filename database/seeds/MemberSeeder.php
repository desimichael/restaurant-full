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
            'fname' => 'justin',
            'lname' => 'james',
            'email' => 'jj1@gmail.com',
            'phone_number' => '5557678898',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
