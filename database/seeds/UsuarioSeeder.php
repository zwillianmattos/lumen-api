<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create(
            [
                'email' => 'willian_matt@hotmail.com',
                'password' => \Illuminate\Support\Facades\Hash::make('willian123')
            ]
        );
    }
}
