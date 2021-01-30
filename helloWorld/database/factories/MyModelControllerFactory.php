<?php

namespace Database\Factories;

use App\Models\MyModelController;
use Illuminate\Database\Eloquent\Factories\Factory;

class MyModelControllerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MyModelController::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }
}
