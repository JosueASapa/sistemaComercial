<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Factories\GiroComercialCatalogoFactory;
use Illuminate\Database\Seeder;
use Database\Seeders\AnomaliaSeeder;

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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'test@example.com',
            'password' => '$2y$12$doEXdsTesrTif4re8ES2huh9rWGaUkBCkSupshDOdp1EdXElPYAmq',
        ]);

        $this->call(AnomaliaSeeder::class);
        $this->call(AjusteSeeder::class);
        $this->call(PermissionsSeeder::class);
    }
}
