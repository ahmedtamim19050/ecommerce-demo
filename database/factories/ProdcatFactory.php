<?php

namespace Database\Factories;

use App\Models\Prodcat;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prodcat>
 */
class ProdcatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Prodcat::class;

    public function definition()
    {
        return [
            'shop_id' => rand(11, 15),
            'name' => $this->faker->word,
            'logo' => $this->faker->imageUrl(),
            'slug' => Str::slug($this->faker->unique()->word),
            'parent_id' => null, // You can adjust this based on your requirements
        ];
    }
}
