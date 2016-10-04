<?php

use Illuminate\Database\Seeder;
use App\Pizza;

use Faker\Factory as Faker;

class PizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DatabaseSeeder::emptyTable('pizzas');
        DatabaseSeeder::emptyDirectory(public_path('storage/pizzas'), ['.gitignore']);
        $faker = Faker::create();
        DB::table('pizzas')->insert ([
            'sabor' => $faker->word,
            'descricao' => $faker->sentences(2, false),
            'filtro' => $faker->word,
            'preco' => $faker->randomFloat(2, 0, 50),

        ]);
    }
}
