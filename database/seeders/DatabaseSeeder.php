<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Factories\GiroComercialCatalogoFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsuarioSeeder::class,
            UserSeeder::class,
            EmpleadoSeeder::class,
            RutaSeeder::class,
            LibroSeeder::class,
            GiroComercialCatalogoSeeder::class,
            TomaSeeder::class,
        ]);
    }
}
