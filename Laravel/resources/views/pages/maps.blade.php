<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa de Ubicación</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #0d0d0d;
            color: white;
        }

        .navbar {
            background: #121212;
            padding: 15px;
            display: flex;
            justify-content: center;
            gap: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            background-color: #2ecc71; /* Verde */
            border-radius: 5px;
            font-size: 16px;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        .navbar a:hover {
            background-color: #27ae60; /* Verde oscuro */
        }

        h1 {
            text-align: center;
            font-size: 2.5rem;
            margin: 20px 0;
            color: #f39c12; /* Naranja */
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }

        #mi_mapa {
            width: 90%;
            height: 600px;
            margin: 20px auto;
            border-radius: 10px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.7);
            border: 3px solid #2ecc71; /* Verde */
        }
    </style>
</head>

<body>
    <!-- Barra de navegación -->
    <div class="navbar">
        <a href="/home">Panel Principal</a>
        <a href="/graficas">Gráficas del Sensor</a>
        <a href="/visualizador-tablas">Visualizador de Tablas</a>
    </div>

    <!-- Contenido principal -->
    <h1>Mapa de Ubicación</h1>
    <div id="mi_mapa"></div>

    <script>
        // Configuración inicial del mapa
        let map = L.map('mi_mapa').setView([-16.4096, -71.5375], 14);
    
        // Añadir capa de OpenStreetMap
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);
    
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition((position) => {
                const { latitude, longitude } = position.coords;
    
                // Añadir marcador dinámico con mensaje simplificado
                L.marker([latitude, longitude]).addTo(map)
                    .bindPopup(`<b>Ubicación del sensor</b>`)
                    .openPopup();
    
                // Centrar el mapa en la ubicación actual
                map.setView([latitude, longitude], 14);
            });
        }
    </script>
    
    
    
</body>

</html>
