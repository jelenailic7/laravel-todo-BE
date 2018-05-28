<?php

use Faker\Generator as Faker;

$factory->define(App\Todo::class, function (Faker $faker) {
    return [
    	'title' => $faker->words($nb = 4, $asText = true),
        'completed' => $faker->boolean,
        'priority' => $faker->randomElement($array = array ('Low','Normal','High')), 
        'user_id'=>App\User::all()->random()->id,
        ];
});
