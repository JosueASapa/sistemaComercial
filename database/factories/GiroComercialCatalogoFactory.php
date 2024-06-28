<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GiroComercialCatalogo>
 */
class GiroComercialCatalogoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $giros[]=["comercial","domestico","industrial","especial","publico"];
        return [
            'nombre_giro'=>'activo',
            'estado'=>'activo',
        ];
      
    }
}
