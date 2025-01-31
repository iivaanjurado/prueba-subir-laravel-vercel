<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Llama a tu usuarioSeeder
        $this->call(UsuarioSeeder::class);
        $this->call(NaturalezaSeeder::class);
        $this->call(FormatoSeeder::class);
    }
}
