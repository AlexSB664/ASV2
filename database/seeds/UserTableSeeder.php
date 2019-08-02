<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Alexis Eduardo Silva Bautista',
            'email' => 'alexskullsoft@gmail.com',
            'password' => bcrypt('123tamarindo'),
        ]);
        DB::table('users')->insert([
            'name' => 'Meh',
            'email' => 'smith@gmail.com',
            'password' => bcrypt('123tamarindo'),
        ]);
    }
}
