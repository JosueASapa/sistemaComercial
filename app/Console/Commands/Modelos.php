<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Modelos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:models';
    protected $description = 'Creación de multiples modelos con sus migraciones y factory';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $models = [
            'Usuario',
            'User',
            'Empleado',
            'Consumo',
            'Departamento',
            'Ruta',
            'Libro',
            'GiroComercialCatalogo',
            'Toma',
            'Medidor',
            'Contrato',
            'Servicio',
            'Cotizacion',
            'CotizacionDetalle',
            'Factibilidad',
            'AsignacionGeografica',
            'OrdenTrabajoCatalogo',
            'OrdenTrabajo',
            'OrdenTrabajoConfiguraciones',
            'CorrecionInformacionSolicitud',
            'CorreccionInformacionDetalle',
            'Rol',
            'Permiso',
            'RolTienePermiso',
            'UserTienePermiso',
            'UserTieneRol',
            'CensoTipo',
            'Censo',
            'CensoEmpleadoParticipa',
            'CensoPregunta',
            'CensoInputs',
            'CensoRespuesta',
            'DatosFiscales',
            'CFDI',
            'ConceptoCatalogo',
            'ConceptoAplicable',
            'ConvenioCatalogo',
            'Cargo',
            'Pago',
            'Abono',
            'BonificacionCatalogo',
            'Bonificacion',
            'AjusteCatalogo',
            'DescuentoCatalogo',
            'ConceptoCargado',
            'Convenio',
            'Ajuste',
            'Descuento',
            'Constancia',
            'ConstanciaCatalogo',
            'ConstanciaDetalle',
            'CancelacionSolicitud',
            'CancelacionesHistorial',
            'Caja',
            'CajaFondo',
            'CajaCorte',
            'Retiro',
            'TaridaConcepto',
            'TarifaServicio',
            'TaridaConceptoDetalle',
            'TarifaServicioDetalle',
            'Periodo',
            'Secuencia',
            'SecuenciaOrden',
            'Factura',
            'FacturaDetalle',
            'CargaTrabajo',
            'Lectura',
            'AnomaliaCatalogo',
            'Anomalia',
            'Auditoria'
        ];

        foreach ($models as $model) {
            $this->call('make:model', ['name' => $model, '-mf' => true]);
        }

        $this->info('All models have been created successfully.');
    }
}
