<?php

use Illuminate\Database\Seeder;

class friendsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('friends')->insert([
            'ge_id' => '1',
            'santa' => 'Alex',
            'santa_telephone' => '6646127701',
            'kid' => 'Vilma',
        ]);
        DB::table('friends')->insert([
            'ge_id' => '1',
            'santa' => 'Gabriel',
            'santa_telephone' => '6641230226',
            'kid' => 'Alex',
        ]);
        DB::table('friends')->insert([
            'ge_id' => '1',
            'santa' => 'Vilma',
            'santa_telephone' => '6641230125',
            'kid' => 'Gabriel',
        ]);
    }
}
