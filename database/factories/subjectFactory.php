<?php

namespace Database\Factories;

use App\Models\subject;
use App\Models\teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\subject>
 */
class subjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=subject::class;
    public function definition()
    {
        return [
            
            'teacher_id'=>teacher::all()->random()->id,
            'subject'=>fake()->sentence(),
            
            
        ];
    }
}
