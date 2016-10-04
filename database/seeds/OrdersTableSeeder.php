<?php

use Illuminate\Database\Seeder;
use App\Order;

use Faker\Factory as Faker;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('orders')->insert ([
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
        ]);
    }
}
