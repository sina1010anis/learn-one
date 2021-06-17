<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Video::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> 'Video : '.$this->faker->languageCode,
            'dec'=> $this->faker->text,
            'path'=> rand(1,8).'.jpg',
            'price'=> rand(10000,999999),
            'type' => 0
        ];
    }
}
