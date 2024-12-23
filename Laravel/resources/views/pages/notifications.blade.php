@extends('layouts.app', ['page' => __('Notificaciones'), 'pageSlug' => 'notifications'])

@section('content')
<div class="row" style="background: #121212; min-height: 100vh; padding: 20px; color: white;">
    <div class="col-md-6">
        <div class="card" style="box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5); background: #1e1e2f; color: #e4e4e4;">
            <div class="card-header" style="background: linear-gradient(135deg, #2a9d8f, #264653); color: white;">
                <h4 class="card-title">Notificaciones de Monitoreo de Sensores</h4>
            </div>
            <div class="card-body">
                <div class="alert alert-info" style="background: #2c3e50; border: none; color: #ecf0f1;">
                    <span>Las lecturas del sensor del dispositivo 3 se han subido correctamente. Todos los valores están dentro del rango esperado.</span>
                </div>
                <div class="alert alert-info" style="background: #2c3e50; border: none; color: #ecf0f1;">
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Cerrar" style="color: #ecf0f1;">
                        <i class="tim-icons icon-simple-remove"></i>
                    </button>
                    <span>El dispositivo 5 no pudo transmitir datos. Por favor, verifica la conexión del sensor.</span>
                </div>
                <div class="alert alert-info alert-with-icon" style="background: #2c3e50; border: none; color: #ecf0f1;" data-notify="container">
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Cerrar" style="color: #ecf0f1;">
                        <i class="tim-icons icon-simple-remove"></i>
                    </button>
                    <span data-notify="icon" class="tim-icons icon-bell-55"></span>
                    <span data-notify="message">¡Advertencia! La temperatura del dispositivo 1 supera el umbral. Se requiere acción inmediata.</span>
                </div>
                <div class="alert alert-info alert-with-icon" style="background: #2c3e50; border: none; color: #ecf0f1;" data-notify="container">
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Cerrar" style="color: #ecf0f1;">
                        <i class="tim-icons icon-simple-remove"></i>
                    </button>
                    <span data-notify="icon" class="tim-icons icon-bell-55"></span>
                    <span data-notify="message">Se necesita una nueva calibración para el sensor del dispositivo 4. Asegúrate de configurar correctamente la humedad para obtener lecturas óptimas.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card" style="box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5); background: #1e1e2f; color: #e4e4e4;">
            <div class="card-header" style="background: linear-gradient(135deg, #f4a261, #e76f51); color: white;">
                <h4 class="card-title">Estados del Sistema</h4>
            </div>
            <div class="card-body">
                <div class="alert alert-primary" style="background: #2a9d8f; border: none; color: #edf2f4;">
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Cerrar" style="color: #edf2f4;">
                        <i class="tim-icons icon-simple-remove"></i>
                    </button>
                    <span><b> Primario - </b> La transmisión de datos de todos los dispositivos activos se ha completado.</span>
                </div>
                <div class="alert alert-success" style="background: #27ae60; border: none; color: #f1f1f1;">
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Cerrar" style="color: #f1f1f1;">
                        <i class="tim-icons icon-simple-remove"></i>
                    </button>
                    <span><b> Éxito - </b> La calibración del sensor del dispositivo 2 fue exitosa. Todos los valores están dentro de los parámetros óptimos.</span>
                </div>
                <div class="alert alert-warning" style="background: #f39c12; border: none; color: #f1f1f1;">
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Cerrar" style="color: #f1f1f1;">
                        <i class="tim-icons icon-simple-remove"></i>
                    </button>
                    <span><b> Advertencia - </b> Se ha detectado una fluctuación de temperatura en el dispositivo 3. Verifica la ubicación del sensor.</span>
                </div>
                <div class="alert alert-danger" style="background: #e74c3c; border: none; color: #f1f1f1;">
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Cerrar" style="color: #f1f1f1;">
                        <i class="tim-icons icon-simple-remove"></i>
                    </button>
                    <span><b> Peligro - </b> El dispositivo 1 está reportando una humedad extremadamente alta. ¡Se requiere acción inmediata!</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
