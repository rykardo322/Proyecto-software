@extends('layouts.app', ['page' => __('Visualizador de Tablas'), 'pageSlug' => 'visualizador'])

@section('content')
<div class="content">
    <h1 class="text-center" style="
        padding: 20px; 
        margin-bottom: 30px; 
        background: linear-gradient(135deg, #4caf50, #388e3c); 
        color: white; 
        border-radius: 10px; 
        font-size: 2.5rem; 
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);">
        Datos del Sensor ESP32
    </h1>

    <!-- Formulario de exportación -->
    <div class="text-center mb-4">
        <form method="GET" action="{{ route('export.csv') }}" class="form-inline">
            <div class="row justify-content-center">
                <div class="col-md-3 mb-2">
                    <input type="date" name="start_date" class="form-control" placeholder="Fecha de inicio" value="{{ request('start_date') }}">
                </div>
                <div class="col-md-3 mb-2">
                    <input type="date" name="end_date" class="form-control" placeholder="Fecha final" value="{{ request('end_date') }}">
                </div>
                <div class="col-md-3 mb-2">
                    <input type="text" name="device_id" class="form-control" placeholder="Device ID" value="{{ request('device_id') }}">
                </div>
                <div class="col-md-3 mb-2">
                    <button type="submit" class="btn btn-success" style="
                        padding: 10px 20px;
                        font-size: 16px;
                        border-radius: 8px;
                        background: linear-gradient(135deg, #4caf50, #388e3c);
                        color: white;
                        font-weight: bold;">
                        Exportar a CSV
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Tabla de datos -->
    <div class="container" style="
        background: #121212; 
        border-radius: 10px; 
        padding: 30px; 
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.4); 
        max-width: 1200px; 
        margin: auto; 
        color: #ffffff;">
        <div class="table-responsive">
            <table class="table table-hover" style="
                border-collapse: collapse; 
                width: 100%; 
                background: #1e1e2f; 
                border-radius: 8px; 
                overflow: hidden;">
                <thead style="
                    background: linear-gradient(135deg, #ff9800, #f44336); 
                    color: white;">
                    <tr>
                        <th style="padding: 12px; text-align: center; font-size: 1rem;">ID</th>
                        <th style="padding: 12px; text-align: center; font-size: 1rem;">Device ID</th>
                        <th style="padding: 12px; text-align: center; font-size: 1rem;">Temperature (°C)</th>
                        <th style="padding: 12px; text-align: center; font-size: 1rem;">Humidity (%)</th>
                        <th style="padding: 12px; text-align: center; font-size: 1rem;">Status</th>
                        <th style="padding: 12px; text-align: center; font-size: 1rem;">Date Time</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($records as $record)
                    <tr>
                        <td>{{ $record->id }}</td>
                        <td>{{ $record->device_id }}</td>
                        <td>{{ $record->temperature }} &deg;C</td>
                        <td>{{ $record->humidity }}%</td>
                        <td>{{ $record->status_read_sensor_dht11 }}</td>
                        <td>{{ $record->date_time }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" style="text-align: center;">No records found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
