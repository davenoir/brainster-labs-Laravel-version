<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'name'=>$faker->company,
        'subHeading'=>$faker->sentence,
        'photo'=>'https://images.unsplash.com/photo-1566410834486-857b30cff4ab?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80',
        'link'=>'https://blog.brainster.co/',
        'description'=>$faker->text
    ];
});
