<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_items')->insert([
            'title' => 'BBQ Bacon Burger',
            'description' => 'Smoked Bacon, Cheddar Cheese and Kansas City BBQ Sauce topped with an onion ring.',
            'image_url' => '/img/garden_salad.png',
            'image_url' => '/img/garden_salad.png','price' =>9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'All American Cheese Burger',
            'description' => 'Smoked Bacon, Cheddar Cheese and Kansas City BBQ Sauce topped with an onion ring.',
            'image_url' => '/img/garden_salad.png',
            'image_url' => '/img/garden_salad.png','price' =>9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Rajun Cajun Burger',
            'description' => 'Smoked Bacon, Cheddar Cheese and Kansas City BBQ Sauce topped with an onion ring.',
            'image_url' => '/img/garden_salad.png',
            'image_url' => '/img/garden_salad.png','price' =>9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Mushroom Swiss Burger',
            'description' => 'Smoked Bacon, Cheddar Cheese and Kansas City BBQ Sauce topped with an onion ring.',
            'image_url' => '/img/garden_salad.png',
            'image_url' => '/img/garden_salad.png','price' =>9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Buffalo Bleu Burger',
            'description' => 'Smoked Bacon, Cheddar Cheese and Kansas City BBQ Sauce topped with an onion ring.',
            'image_url' => '/img/garden_salad.png',
            'image_url' => '/img/garden_salad.png','price' =>9.99,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
