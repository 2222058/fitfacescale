<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pesagem;
use App\Models\User;

class PesagemSeeder extends Seeder
{
    public function run()
    {
        // Busca utilizadores pelo email (garante que estes users existem antes do seeder)
        $francisco = User::where('email', 'francisco@example.com')->first();
        $duarte = User::where('email', 'duarte@example.com')->first();

        if ($francisco) {
            Pesagem::create(['user_id' => $francisco->id, 'data_pesagem' => '2025-06-01', 'peso' => 83.0]);
            Pesagem::create(['user_id' => $francisco->id, 'data_pesagem' => '2025-06-05', 'peso' => 82.5]);
            Pesagem::create(['user_id' => $francisco->id, 'data_pesagem' => '2025-06-07', 'peso' => 84.0]);
            Pesagem::create(['user_id' => $francisco->id, 'data_pesagem' => '2025-06-08', 'peso' => 82.5]);
        }

        if ($duarte) {
            Pesagem::create(['user_id' => $duarte->id, 'data_pesagem' => '2025-06-01', 'peso' => 68.0]);
        }
    }
}
