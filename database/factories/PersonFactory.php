<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Person;

class PersonFactory extends Factory
{
    /**
     * The name of the factory"s correspoding model.
     * 
     * @var string
     */
    protected $model = Person::class;

    /**
     * Define the model"s default state.
     * 
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->name,
            'age' => $this->faker->numberBetween(1,100)
        ];
    }
}
