<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => '転職対策',
        'body' => '履歴書と職務経歴書、そして面接練習',
    ];
});
