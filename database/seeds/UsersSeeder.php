<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jesenia Ramirez Carreon',
            'email' => 'jesy@correo.com',
            'password' => bcrypt('12345678'),
            'user_type_id' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'Roberto',
            'email' => 'roberto@correo.com',
            'password' => bcrypt('12345678'),
            'user_type_id' => '2',
        ]);
    }
}
