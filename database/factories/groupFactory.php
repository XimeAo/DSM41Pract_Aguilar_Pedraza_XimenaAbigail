<?php

namespace Database\Factories;

use App\Models\group;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\group>
 */
class groupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=group::class;
    public function definition()
    {
        return [
            
            'group'=>fake()->name(),
        ];
    }
}
