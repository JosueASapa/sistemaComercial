<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GiroComercialCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            ['nombre' => 'domestico'],
            ['nombre' => 'comercial'],
            ['nombre' => 'industrial'],
            ['nombre' => 'publico'],
            ['nombre' => 'especial']
          ];
    }
}
