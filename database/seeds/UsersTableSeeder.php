<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
 public function run()
{
    DB::table('users')->truncate();
    DB::table('users')->insert([
        'name' => str_random(10),
        'email' =>'admin@admin',
        'password' => bcrypt('admin')
    ]);
}
}
