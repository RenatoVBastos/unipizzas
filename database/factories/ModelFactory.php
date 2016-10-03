<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$faker = Faker\Factory::create('pt_BR');

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Pizza::class, function (Faker\Generator $faker){
    return [
        'sabor' => $faker->word,
        'descricao' => $faker->sentences(2, false),
        'filtro' => $faker->word,
        'preco' => $faker->randomFloat(2, 0, 50),
        'imagem' => $faker->imageUrl( 200, 200, 'pizza')
    ];
});

$factory->define(App\Order::class, function (Faker\Generator $faker){
    $pizzas = App\Pizza::all()->toArray();

    return [
        'data' => $faker->date('Y-m-d', 'now'),
        'bairro' => $faker->cityPreffix,	//word,
        'rua' => $faker->streetName,
        'numero' => $faker->numberBetween(1, 2000),
        'complemento' => $faker->numerify('apt ###'),
        'cep' => $faker->$faker->postcode,
        'cpf' => $faker->cpf,	//unique->randomNumber(11),
        'telefone' => $faker->phoneNumber,
        'email' => $faker->email,
        'tamanho' => $faker->numberBetween(1, 4),
        'preco_final' => $faker->randomFloat(2, 0, 70),

        'id_pizza' => random_int($pizzas[0]['id'], $pizzas[count($pizzas)-1]['id'])
    ];
});
