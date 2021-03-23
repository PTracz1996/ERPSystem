<?php

namespace Database\Factories;

use App\Models\clients;
use Illuminate\Database\Eloquent\Factories\Factory;

class clientsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = clients::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nip' => "PL".$this->faker->biasedNumberBetween(1000000000,9999999999),
            'company_name' => $this->faker->company, //company name or name and surname
            'email' => $this->faker->unique()->email,
            'city' => $this->faker->city,
            'street' => $this->faker->streetName,
            'house_number' => $this->faker->biasedNumberBetween(1,40),
            'apartment_number' => $this->faker->biasedNumberBetween(1,35),
            'post_code' => $this->faker->biasedNumberBetween(10,99)."-".$this->faker->biasedNumberBetween(100,999),
            'phone_number' => $this->faker->unique()->phoneNumber,
        ];
    }
}
