@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
<div class="header py-5 text-center" style="background: linear-gradient(135deg, #1b4332, #2d6a4f); box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);">
    <h1 class="text-white display-4">Dashboard del Proyecto de Sensores</h1>
    <p class="text-light">Conoce el propósito, desarrollo y alcance de este innovador sistema.</p>
</div>

<div class="container mt-5">
    <!-- Introducción -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4" style="box-shadow: 0 6px 15px rgba(0, 0, 0, 0.4); background: #121212; color: #ffffff;">
                <div class="card-header text-center" style="background: linear-gradient(135deg, #1b4332, #2d6a4f); color: white;">
                    <h4>Propósito del Proyecto</h4>
                </div>
                <div class="card-body">
                    <p>
                        Este proyecto tiene como objetivo monitorear y registrar datos ambientales como temperatura y humedad
                        en tiempo real. Utilizando sensores de última generación integrados con sistemas basados en
                        IoT (Internet de las Cosas), el proyecto proporciona una plataforma accesible y escalable
                        para la gestión de datos en diferentes entornos.
                    </p>
                    <p>
                        Este sistema es ideal para aplicaciones en agricultura, control de calidad de aire, gestión de
                        almacenes y automatización de espacios inteligentes.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Características principales -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4" style="box-shadow: 0 6px 15px rgba(0, 0, 0, 0.4); background: #121212; color: #ffffff;">
                <div class="card-header text-center" style="background: linear-gradient(135deg, #ee9b00, #ca6702); color: white;">
                    <h4>Características Principales</h4>
                </div>
                <div class="card-body">
                    <ul>
                        <li>Monitoreo en tiempo real de temperatura y humedad desde múltiples ubicaciones.</li>
                        <li>Almacenamiento de datos en una base de datos SQL para análisis posterior.</li>
                        <li>Visualización intuitiva mediante gráficas interactivas y mapas dinámicos.</li>
                        <li>Interfaz de usuario accesible con opciones de filtrado por fecha y rango de tiempo.</li>
                        <li>Capacidades de escalabilidad para incluir más sensores en el futuro.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Tecnologías Utilizadas -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4" style="box-shadow: 0 6px 15px rgba(0, 0, 0, 0.4); background: #121212; color: #ffffff;">
                <div class="card-header text-center" style="background: linear-gradient(135deg, #1b4332, #2d6a4f); color: white;">
                    <h4>Tecnologías Utilizadas</h4>
                </div>
                <div class="card-body">
                    <p>
                        El proyecto combina una variedad de tecnologías modernas para garantizar un funcionamiento
                        eficiente y confiable:
                    </p>
                    <ul>
                        <li><strong>Hardware:</strong> Sensores DHT11/DHT22, Microcontroladores ESP32.</li>
                        <li><strong>Backend:</strong> Framework Laravel, PHP 8.</li>
                        <li><strong>Frontend:</strong> HTML5, CSS3, JavaScript, Chart.js, Leaflet.js.</li>
                        <li><strong>Base de Datos:</strong> MySQL para almacenamiento de datos.</li>
                        <li><strong>Servidor:</strong> Apache en entornos locales.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Impacto y Beneficios -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4" style="box-shadow: 0 6px 15px rgba(0, 0, 0, 0.4); background: #121212; color: #ffffff;">
                <div class="card-header text-center" style="background: linear-gradient(135deg, #ee9b00, #ca6702); color: white;">
                    <h4>Impacto y Beneficios</h4>
                </div>
                <div class="card-body">
                    <p>
                        El impacto del proyecto abarca diversos sectores:
                    </p>
                    <ul>
                        <li>Optimización en la gestión de recursos en ambientes controlados.</li>
                        <li>Reducción de costos al identificar patrones en los datos ambientales.</li>
                        <li>Facilitación de toma de decisiones basadas en datos confiables.</li>
                        <li>Capacidad para alertar sobre condiciones extremas en tiempo real.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Equipo de Desarrollo -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card" style="box-shadow: 0 6px 15px rgba(0, 0, 0, 0.4); background: #121212; color: #ffffff;">
                <div class="card-header text-center" style="background: linear-gradient(135deg, #e63946, #ca6702); color: white;">
                    <h4>Equipo de Desarrollo</h4>
                </div>
                <div class="card-body">
                    <p>
                        Este proyecto fue desarrollado por un equipo comprometido con la innovación tecnológica, compuesto por:
                    </p>
                    <ul>
                        <li><strong>Hancco Medina Huber Van:</strong> Líder del Proyecto - Desarrollador Backend</li>
                        <li><strong>Huacan Falcon Rykardo Gabriel:</strong> Responsable de Hardware (ESP32 y Sensores)</li>
                        <li><strong>Canazas Rosas Willian Roy:</strong> Desarrollador Backend</li>
                        <li><strong>Cano Del Solar Bruno:</strong> Desarrollador Frontend</li>
                        <li><strong>Prieto Tito Manuel Ismael:</strong> Desarrollador Backend</li>
                        <li><strong>Mamani Alvarez Rudy:</strong> Especialista en Base de Datos</li>
                        <li><strong>Mamani Larico Berly Gabriel:</strong> Tester y Documentación</li>
                    </ul>
                    <p>
                        <strong>Agradecimientos:</strong> A nuestro asesor técnico "El Tigre" y a todas las personas que brindaron apoyo
                        durante el desarrollo de este proyecto.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
