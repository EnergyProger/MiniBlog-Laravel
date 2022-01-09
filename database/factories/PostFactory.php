<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence,
            'description'=>$this->faker->text,
            'img'=>$this->faker->image(public_path('assets/images'),1280,720,null,false),
            'category_id'=>$this->faker->numberBetween(1,5)
        ];
    }
}
