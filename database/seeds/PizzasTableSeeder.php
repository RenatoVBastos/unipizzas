<?php

use Illuminate\Database\Seeder;

class PizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pizzas')->insert ([
            'sabor' => $faker->word,
            'descricao' => $faker->sentences(2, false),
            'filtro' => $faker->word,
            'preco' => $faker->randomFloat(2, 0, 50),
            'imagem' => $faker->imageUrl( 200, 200, 'pizza')
        ]);
    }
}
