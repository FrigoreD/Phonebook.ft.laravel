<?php

namespace Database\Factories;

use App\models\Phonebook;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhonebookFactory extends Factory
{
    protected $model = Phonebook::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email'=> $this->faker->email,
            'phone' => $this->faker->e164PhoneNumber,
            "created_at" => $this->faker->dateTime(),
            "updated_at" => $this->faker->dateTime(),
        ];
    }
}
