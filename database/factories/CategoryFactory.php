<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(128),
            'slug' => $this->faker->text(128),
            'description' => $this->faker->text(128),
            'parent_id' => $this->faker->numberBetween(0,10),
            'sort_order' =>$this->faker->unique()->numberBetween(0,10),
        ];
    }
}
