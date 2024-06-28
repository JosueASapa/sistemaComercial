<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Libro;
use App\Models\Ruta;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    protected $model = Libro::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition(): array
    {
        $ruta_id = Ruta::inRandomOrder()->first()->id;
        return [
            'id_ruta' => $ruta_id,
            'nombre' => $this->faker->word,
            'latitud' => $this->faker->latitude,
            'longitud' => $this->faker->longitude,
            'estado'=>'activo',
        ];
    }
}
