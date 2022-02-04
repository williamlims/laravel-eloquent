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
            'invoice' =>$this->faker->randomNumber($nbDigits = 4, $strict = false),
            'installment' => $this->faker->randomDigit,
            'client_id' => $this->faker->uuid, 
            'value' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 99),
            'due_date' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+1 week', $timezone = null),
            'payment_date' => $this->faker->dateTimeBetween($startDate = '-1 week', $endDate = 'now', $timezone = null)
        ];
    }
}
