<?php

namespace Database\Seeders;

use App\Models\Bookable;
use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bookable::all()->each(function (Bookable $bookable)
        {
            // 不使用 create 而是用 make 
            // $review = factory(Review::class, random_int(5, 30)->make());
            $review = Review::factory(random_int(5, 30))->make();

            $bookable->reviews()->saveMany($review);
        });
    }
}
