<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dth11sensor;

class DashboardController extends Controller
{
    public function index()
    {
        // Obtener las últimas lecturas
        $latestTemperature = dth11sensor::where('status_read_sensor_dht11', 'success')->latest('date_time')->value('temperature');
        $latestHumidity = dth11sensor::where('status_read_sensor_dht11', 'success')->latest('date_time')->value('humidity');
        
        // Obtener datos para las gráficas (últimas 24 horas)
        $records = dth11sensor::where('date_time', '>=', now()->subDay())
            ->orderBy('date_time', 'asc')
            ->get(['temperature', 'humidity', 'date_time']);
        
        // Preparar datos para gráficas
        $timestamps = $records->pluck('date_time')->map(function ($timestamp) {
            return $timestamp->format('H:i'); // Solo la hora
        });
        $temperatures = $records->pluck('temperature');
        $humidities = $records->pluck('humidity');

        // Preparar datos para la tabla
        $tableData = $records;

        return view('dashboard', compact('latestTemperature', 'latestHumidity', 'timestamps', 'temperatures', 'humidities', 'tableData'));
    }
}

