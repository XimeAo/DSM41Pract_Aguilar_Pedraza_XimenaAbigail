<?php

namespace Database\Factories;

use App\Models\teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\teacher>
 */
class teacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=teacher::class;
    public function definition()
    {
        return [
            
            'name'=>fake()->sentence(),
            'age'=>fake()->numberBetween($int1=1,$int2=100),
        ];
    }
}
