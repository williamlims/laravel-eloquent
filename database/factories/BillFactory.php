<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'invoice' =>$this->faker->randomNumber(4, false),
            'installment' => $this->faker->randomDigit,
            'client_id' => $this->faker->uuid, 
            'value' => $this->faker->randomFloat(NULL, 0, 99),
            'due_date' => $this->faker->dateTimeBetween('now', '+1 week', null),
            'payment_date' => $this->faker->dateTimeBetween('-1 week', 'now', null)
        ];
    }
}
