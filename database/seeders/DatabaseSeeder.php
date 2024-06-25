<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'admin',
             'email' => 'test@example.com',
             'password' => '$2y$12$doEXdsTesrTif4re8ES2huh9rWGaUkBCkSupshDOdp1EdXElPYAmq',
         ]);
         /*
        $this->call([
            UsuarioSeeder::class,
            UserSeeder::class,
            EmpleadoSeeder::class,
            RutaSeeder::class,
            LibroSeeder::class,
        ]); */
    }
}
