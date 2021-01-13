<?php

namespace Database\Factories;

use App\Models\Photo;
use App\Models\Advert;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PhotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Photo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'advert_id' =>Advert::all()->random()->id,
            'is_main' => $this->faker->randomElement([0, 1]),
            'link'=> Str::random(10).'.png'
        ];
    }
}
