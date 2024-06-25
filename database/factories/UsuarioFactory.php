<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    protected $model = Usuario::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->firstName,
            'apellido_paterno' => $this->faker->lastName,
            'apellido_materno' => $this->faker->lastName,
            'nombre_contacto' => $this->faker->name,
            'telefono' => substr($this->faker->phoneNumber(), 2, 10),
            'curp' => Str::upper(Str::random(18)),
            'rfc' => Str::upper(Str::random(13)),
            'correo' => $this->faker->unique()->safeEmail,
        ];
    }
}
