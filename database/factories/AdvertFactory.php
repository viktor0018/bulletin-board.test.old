<?php

namespace Database\Factories;

use App\Models\Advert;
use App\Models\User;
use App\Models\City;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdvertFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Advert::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText(128),
            'category_id' => Category::all()->random()->id,
            'user_id' => User::where('status','active')->inRandomOrder()->first()->id,
            'status' => $this->faker->randomElement(['edited','moderated','rejected','approved','soldout']),
            'city_id' => City::all()->random()->id,
            'description' =>$this->faker->realText(128),
            'published_at'  =>$this->faker->dateTimeBetween('-1 years'),
            'views' => $this->faker->numberBetween(0,10000),
            'price' => $this->faker->numberBetween(0,10000),
        ];
    }
}
