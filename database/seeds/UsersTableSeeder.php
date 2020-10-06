<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;


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
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'fname' => 'jane',
            'lname' => 'doe',
            'email' => 'jane@gmail.com',
            'password' => Hash::make('11111111'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        $faker = Faker::create();
        foreach(range(1,20) as $index) {
            DB::table('users')->insert([
                'fname' => $faker->firstName,
                'email' => $faker->email,
                'lname' => $faker->lastName,
                'password' => Hash::make('11111111'),
                'updated_at' => $faker->dateTimeThisMonth,
                'created_at' => $faker->dateTimeThisMonth
            ]);
        }
    }
}
