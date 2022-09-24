<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Throwable;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->randomFloat(2, 80, 400),
        ];
    }

    public function productImage(): self
    {
        try {
            return $this->afterCreating(function (Product $product): void {
                    $imageUrl = 'https://placeimg.com/200/200/any';
                    $product
                        ->addMediaFromUrl($imageUrl)
                        ->toMediaCollection('product-images');
            });
        } catch (Throwable) {
            return $this;
        }
    }
}
