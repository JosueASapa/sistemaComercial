<?php

namespace Database\Factories;

use App\Models\Ruta;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

use function Laravel\Prompts\table;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ruta>
 */
class RutaFactory extends Factory
{
    protected $model = Ruta::class;
    protected static $numrutas = 1;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $numrutas = self::$numrutas++;
        //$numrutas=DB::table('rutas')->count()+1;
        return [
        'nombre'=>'ruta'.$numrutas,
        'estatus'=>'activo',
        ];
    }
}
