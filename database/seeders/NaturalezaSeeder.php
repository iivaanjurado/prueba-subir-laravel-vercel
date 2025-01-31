<?php

namespace Database\Seeders;

use App\Models\Naturaleza;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NaturalezaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Naturaleza::insert([
            ['nombre' => 'Biopsia', 'codigo' => ' '],
            ['nombre' => 'Esputo', 'codigo' => ' '],
            ['nombre' => 'Citologia Bucal', 'codigo' => ' '],
            ['nombre' => 'Muestra de Sangre', 'codigo' => ' '],
        ]);
    }
}
