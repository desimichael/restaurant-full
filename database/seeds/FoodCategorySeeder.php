<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_categories')->insert([
            'title' => 'apps',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint cum sed veritatis non iure harum distinctio doloremque ipsum asperiores laboriosam?',
            'image_url' => '/img/house_sampler_boneless.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'burgers',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint cum sed veritatis non iure harum distinctio doloremque ipsum asperiores laboriosam?',
            'image_url' => '/img/jalapeno_bacon_burger.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'entrees',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint cum sed veritatis non iure harum distinctio doloremque ipsum asperiores laboriosam?',
            'image_url' => '/img/steak_potatoes.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'sides',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint cum sed veritatis non iure harum distinctio doloremque ipsum asperiores laboriosam?',
            'image_url' => '/img/garden_salad.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'desserts',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint cum sed veritatis non iure harum distinctio doloremque ipsum asperiores laboriosam?',
            'image_url' => '/img/strawberry_cheesecake.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
