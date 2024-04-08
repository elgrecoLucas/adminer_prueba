<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Chirp;

class ChirpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chirp::create([
            "message" => 'critica 3.0',
            "user_id" => 2
        ]);
        Chirp::create([
            "message" => "mensaje de aviso",
            "user_id" => 2
        ]);
        Chirp::create([
            "message" => "esto es una prueba",
            "user_id" => 2
        ]);
        Chirp::create([
            "message" => "aviso nuevo",
            "user_id" => 2
        ]);
    }
}
