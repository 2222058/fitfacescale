<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
{
    User::create([
        'name' => 'Francisco Crespo',
        'email' => 'francisco@example.com',
        'password' => Hash::make('123'),
        'idade' => 30,
        'altura' => 1.75,
        'peso' => 82.5,
        'numero_socio' => 'A1001'
    ]);

    User::create([
        'name' => 'Duarte Santana',
        'email' => 'duarte@example.com',
        'password' => Hash::make('123'),
        'idade' => 28,
        'altura' => 1.65,
        'peso' => 68.2,
        'numero_socio' => 'A1002'
    ]);

    }
}
