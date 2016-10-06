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
            'bairro' => $faker->word,
            'rua' => $faker->name,
            'numero' => $faker->numberBetween(1, 2000),
            'complemento' => $faker->numberBetween(1, 200),
            'cep' => $faker->postcode,
            'cpf' => '99999999999',
            'telefone' => $faker->phoneNumber,
            'email' => $faker->email,
            'tamanho' => $faker->numberBetween(1, 4),
            'preco_final' => $faker->randomFloat(2, 0, 70),

            'id_pizza' => 1
        ]);

    }
}
