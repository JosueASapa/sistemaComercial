<?php

namespace Database\Factories;
use App\Models\Toma;
use App\Models\GiroComercialCatalogo;
use App\Models\Usuario;
use App\Models\Libro;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Toma>
 */
class TomaFactory extends Factory
{
    protected $model = Toma::class;
    protected static $numUser = 0;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_usuario' => Usuario::inRandomOrder()->get()->id(),
            'id_giro_comercial' => GiroComercialCatalogo::inRandomOrder()->get()->id(),
            'id_libro' => Libro::inRandomOrder()->get()->id(),
            'estatus' => $this->faker->randomElement(['pendiente confirmación inspección', 'pendiente de inspeccion', 'pendiente de instalacion', 'activa', 'baja definitiva', 'baja temporal', 'en proceso']),
            'clave_catastral' => $this->faker->optional()->postcode,
            'calle' => $this->faker->streetName,
            'colonia' => $this->faker->streetSuffix,
            'codigo_postal' => $this->faker->postcode,
            'localidad' => $this->faker->city,
            'entre_calle_1' => $this->faker->streetName,
            'entre_calle_2' => $this->faker->streetName,
            'diametro_de_la_toma' => $this->faker->randomFloat(2, 1, 50),
            'calle_notificaciones' => $this->faker->streetName,
            'entre_calle_notificaciones_1' => $this->faker->streetName,
            'entre_calle_notificaciones_2' => $this->faker->streetName,
            'tipo_servicio' => $this->faker->randomElement(['lectura', 'promedio']),
            'tipo_toma' => $this->faker->randomElement(['domestico', 'comercial', 'industrial', 'publico', 'especial']),
            'coordenada' => $this->faker->latitude . ',' . $this->faker->longitude,
            'tipo_contratacion' => $this->faker->randomElement(['normal', 'condicionado', 'desarrollador','clandestina']),
            'estado'=>'activo',
        ];
    }
}
