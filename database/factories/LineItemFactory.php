<?php

namespace Database\Factories;

use App\Models\LineItem;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class LineItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LineItem::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->text,
            'quantity' => $this->faker->randomNumber(2),
            'description' => $this->faker->sentence(15),
            'category' => $this->faker->text(255),
//            'unit' => $this->faker->randomElement(),
            'unit_price_excl_vat' => $this->faker->randomNumber(0),
            'discount_excl_vat' => $this->faker->randomNumber(0),
            'sub_total_excl_vat' => $this->faker->randomNumber(0),
            'vat_percentage' => $this->faker->randomNumber(1),
            'sub_total_incl_vat' => $this->faker->randomNumber(0),
            'bid_id' => \App\Models\Bid::factory(),
        ];
    }
}
