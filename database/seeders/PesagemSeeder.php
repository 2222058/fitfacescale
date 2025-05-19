<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Pesagem;
use App\Models\User;

class PesagemSeeder extends Seeder
{
    public function run()
{
    $joao = User::where('email', 'joao@example.com')->first();
    $maria = User::where('email', 'maria@example.com')->first();

    Pesagem::create([
        'user_id' => $joao->id,
        'data_pesagem' => '2024-04-01',
        'peso' => 83.0,
    ]);

    Pesagem::create([
        'user_id' => $joao->id,
        'data_pesagem' => '2024-04-05',
        'peso' => 82.5,
    ]);


    Pesagem::create([
        'user_id' => $joao->id,
        'data_pesagem' => '2024-04-10',
        'peso' => 84.0,
    ]);

    Pesagem::create([
        'user_id' => $joao->id,
        'data_pesagem' => '2024-04-15',
        'peso' => 82.5,
    ]);


    Pesagem::create([
        'user_id' => $maria->id,
        'data_pesagem' => '2024-04-01',
        'peso' => 68.0,
    ]);
}
}
