<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'name_vi' => $this->faker->name(),
            'SKU' => $this->faker->randomNumber(8),
            'Slug' => 'xxx-xxx-xxx-xxx-xxx',
            'description' => $this->faker->text(200),
        ];
    }
}
