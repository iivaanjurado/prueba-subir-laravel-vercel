<?php

namespace Database\Seeders;

use App\Models\Formato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Formato::insert([
            ['nombre' => 'Fresco', 'codigo' => ' '],
            ['nombre' => 'Formol', 'codigo' => ' '],
            ['nombre' => 'Etanol 70%', 'codigo' => ' ']
        ]);
    }
}
