<?php

namespace Database\Factories;

use App\Models\Garage;
use Illuminate\Database\Eloquent\Factories\Factory;

class GarageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Garage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             'name' =>$this->faker->text(50),
            'location'=>$this->faker->text(30),
            'mechanic'=>$this->faker->text(20)
        ];
    }
}
