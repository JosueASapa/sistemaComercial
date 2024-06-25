<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Empleado;
use App\Models\User;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleado>
 */
class EmpleadoFactory extends Factory
{
    protected $model = Empleado::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_user' => User::count()-1, //usar User::count();
            'codigo_empleado' => Str::upper(Str::random(12)),
            'nombre' => substr($this->faker->firstName, 0, 12),
            'apellido_paterno' => substr($this->faker->lastName, 0, 12),
            'apellido_materno' => substr($this->faker->lastName, 0, 12),
            'curp' => Str::upper(Str::random(18)),
            'fecha_nacimiento' => $this->faker->date(),
            'departamento' => $this->faker->word,
            'departamento_tipo' => $this->faker->word,
        ];
    }
}
