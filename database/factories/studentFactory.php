<?php

namespace Database\Factories;

use App\Models\group;
use App\Models\student;
use App\Models\subject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\student>
 */
class studentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=student::class;
    public function definition()
    {
        return [
            
            'name'=>fake()->sentence(),
            'age'=>fake()->numberBetween($int1=1,$int2=50),
            'group_id'=>group::all()->random()->id,
            'subject_id'=>subject::all()->random()->id,

        ];
    }
}
