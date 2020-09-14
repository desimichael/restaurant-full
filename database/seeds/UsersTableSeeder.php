<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fname' => 'dame',
            'lname' => 'dolla',
            'email' => 'dame@gmail.com',
            'password' => Hash::make('11111111'),
        ]);
        DB::table('users')->insert([
            'fname' => 'jane',
            'lname' => 'doe',
            'email' => 'jane@gmail.com',
            'password' => Hash::make('11111111'),
        ]);
    }
}
