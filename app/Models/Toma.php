<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toma extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_usuario',
        'id_giro_comercial',
        'id_libro',
        'estatus',
        'clave_catastral',
        'calle',
        'colonia',
        'codigo_postal',
        'localidad',
        'entre_calle_1',
        'entre_calle_2',
        'diametro_de_la_toma',
        'calle_notificaciones',
        'entre_calle_notificaciones_1',
        'entre_calle_notificaciones_2',
        'tipo_servicio',
        'tipo_toma',
        'coordenada',
        'tipo_contratacion',
    ];
}
