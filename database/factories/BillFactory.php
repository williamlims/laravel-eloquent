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
            'invoice' =>$this->faker->randomNumber(4),
            'installment' => $this->faker->randomNumber(1),
            'client_id' => $this->faker->uuid, 
            'value' => $this->faker->randomFloat(0, 0, 99),
            'due_date' => $this->faker->unique()->dateBetween('now', '+1 week'),
            'payment_date' => $this->faker->unique()->dateBetween('-1 week', 'now')
        ];
    }
}
