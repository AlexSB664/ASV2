<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Crypt;

class GiftExchangeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gift_exchange')->insert([
            'user_id' => '1',
            'name' => 'C4',
            'clave_privada' => Crypt::encryptString('123tamarindo'),
        ]);
        DB::table('gift_exchange')->insert([
            'user_id' => '1',
            'name' => Str::random(10),
            'clave_privada' => bcrypt('123tamarindo'),
        ]);
        DB::table('gift_exchange')->insert([
            'user_id' => '1',
            'name' => Str::random(10),
            'clave_privada' => bcrypt('123tamarindo'),
        ]);
    }
}