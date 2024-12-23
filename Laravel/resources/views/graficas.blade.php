@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
<div class="header py-5 text-center" style="background: linear-gradient(135deg, #121212, #1a1a1a); box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);">
    <h1 class="text-white display-4">Proyecto de Sensores</h1>
    <p class="text-light">Monitorea los datos de temperatura y humedad en tiempo real</p>
</div>

<div class="container my-5" style="background: #0d0d0d; padding: 20px; border-radius: 10px; box-shadow: 0 6px 15px rgba(0, 0, 0, 0.7);">
    <!-- Gráficos -->
    <div class="row">
        <!-- Gráfico de Temperatura -->
        <div class="col-lg-6 mb-4">
            <div class="chart-container" style="
                background: #121212; 
                padding: 20px; 
                border-radius: 10px; 
                box-shadow: 0 6px 15px rgba(0, 0, 0, 0.7); 
                border-left: 5px solid #2ecc71;">
                <h5 class="text-white text-center" style="color: #2ecc71;">Gráfico de Temperatura</h5>
                <canvas id="temperatureChart"></canvas>
            </div>
        </div>
        <!-- Gráfico de Humedad -->
        <div class="col-lg-6 mb-4">
            <div class="chart-container" style="
                background: #121212; 
                padding: 20px; 
                border-radius: 10px; 
                box-shadow: 0 6px 15px rgba(0, 0, 0, 0.7); 
                border-left: 5px solid #e67e22;">
                <h5 class="text-white text-center" style="color: #e67e22;">Gráfico de Humedad</h5>
                <canvas id="humidityChart"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Datos enviados desde Laravel
    const timestamps = @json($timestamps);
    const temperatures = @json($temperatures);
    const humidities = @json($humidities);

    // Configuración del gráfico de Temperatura
    new Chart(document.getElementById("temperatureChart").getContext("2d"), {
        type: "line",
        data: {
            labels: timestamps,
            datasets: [{
                label: "Temperatura (°C)",
                data: temperatures,
                borderColor: "#2ecc71", // Verde
                backgroundColor: "rgba(46, 204, 113, 0.2)",
                borderWidth: 2,
                tension: 0.4,
                pointRadius: 4,
                pointHoverRadius: 6,
            }],
        },
        options: {
            responsive: true,
            plugins: {
                legend: { labels: { color: "#ffffff", font: { size: 14 } } },
            },
            scales: {
                x: { 
                    ticks: { color: "#ffffff" }, 
                    grid: { color: "rgba(255,255,255,0.1)" } 
                },
                y: { 
                    ticks: { color: "#ffffff" }, 
                    grid: { color: "rgba(255,255,255,0.1)" } 
                },
            },
        },
    });

    // Configuración del gráfico de Humedad
    new Chart(document.getElementById("humidityChart").getContext("2d"), {
        type: "line",
        data: {
            labels: timestamps,
            datasets: [{
                label: "Humedad (%)",
                data: humidities,
                borderColor: "#e67e22", // Naranja
                backgroundColor: "rgba(230, 126, 34, 0.2)",
                borderWidth: 2,
                tension: 0.4,
                pointRadius: 4,
                pointHoverRadius: 6,
            }],
        },
        options: {
            responsive: true,
            plugins: {
                legend: { labels: { color: "#ffffff", font: { size: 14 } } },
            },
            scales: {
                x: { 
                    ticks: { color: "#ffffff" }, 
                    grid: { color: "rgba(255,255,255,0.1)" } 
                },
                y: { 
                    ticks: { color: "#ffffff" }, 
                    grid: { color: "rgba(255,255,255,0.1)" } 
                },
            },
        },
    });
</script>
@endpush
