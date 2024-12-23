<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dth11sensor;
use Symfony\Component\HttpFoundation\StreamedResponse;

class dth11_fController extends Controller
{
    public function index()
    {
        $records = dth11sensor::orderBy('date_time', 'desc')->get();
        return view('visualizador', compact('records'));
    }

    public function graficas()
    {
        $records = dth11sensor::orderBy('date_time', 'asc')->get();
        $temperatures = $records->pluck('temperature')->toArray();
        $humidities = $records->pluck('humidity')->toArray();
        $timestamps = $records->pluck('date_time')->toArray();

        return view('graficas', compact('temperatures', 'humidities', 'timestamps'));
    }

    public function exportCsv(Request $request)
    {
        $query = dth11sensor::query();

        // Aplicar filtros si están presentes
        if ($request->has('start_date') && $request->start_date) {
            $query->where('date_time', '>=', $request->start_date);
        }
        if ($request->has('end_date') && $request->end_date) {
            $query->where('date_time', '<=', $request->end_date);
        }
        if ($request->has('device_id') && $request->device_id) {
            $query->where('device_id', $request->device_id);
        }

        $data = $query->get();

        $response = new StreamedResponse(function () use ($data) {
            $handle = fopen('php://output', 'w');
            // Encabezados del archivo CSV
            fputcsv($handle, ['ID', 'Device ID', 'Temperature (°C)', 'Humidity (%)', 'Status', 'Date Time']);

            foreach ($data as $row) {
                fputcsv($handle, [
                    $row->id,
                    $row->device_id,
                    $row->temperature,
                    $row->humidity,
                    $row->status_read_sensor_dht11,
                    $row->date_time,
                ]);
            }
            fclose($handle);
        });

        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="sensor_data.csv"');

        return $response;
    }

    public function mapa()
{
    // Obtener el último registro
    $latestRecord = dth11sensor::orderBy('date_time', 'desc')->first();

    // Verificar si se encontró un registro
    if (!$latestRecord) {
        // Si no hay registros, retornar directamente la vista sin datos
        return view('pages.maps');
    }

    // Retornar la vista sin enviar las variables de temperatura y humedad
    return view('pages.maps');
}

}
