<div class="sidebar" id="sidebar" style="background: #121212; min-height: 100vh; color: white; padding: 20px; position: fixed; transition: all 0.3s ease;">
    <div class="sidebar-wrapper">
        <!-- Botón para mostrar/ocultar -->
        <button id="toggleMenu" style="
            background: none; 
            border: none; 
            color: #e8f5e9; 
            font-size: 20px; 
            margin-bottom: 20px; 
            cursor: pointer;">
            &#9776; <!-- Icono de menú -->
        </button>

        <!-- Logo -->
        <div class="logo text-center mb-4">
            <a href="#" class="simple-text logo-mini" style="color: #e63946; font-size: 24px; font-weight: bold;">
                {{ __('SP') }}
            </a>
            <a href="#" class="simple-text logo-normal" style="color: #f1faee; font-size: 18px; font-weight: 600;">
                {{ __('TIGRES') }}
            </a>
        </div>

        <!-- Enlaces de navegación -->
        <ul class="nav" style="list-style: none; padding: 0; margin: 0;">
            <!-- Panel Principal -->
            <li style="border-bottom: 1px solid #2c2c2c; padding: 10px 0;">
                <a href="{{ route('home') }}" style="text-decoration: none; color: #e8f5e9; display: flex; align-items: center; gap: 10px;">
                    <i class="tim-icons icon-chart-pie-36" style="color: #f94144;"></i>
                    <span>Panel Principal</span>
                </a>
            </li>

            <!-- Gestión de Usuarios -->
            <li style="border-bottom: 1px solid #2c2c2c; padding: 10px 0;">
                <a href="javascript:void(0);" onclick="toggleSubmenu('userSubmenu')" style="text-decoration: none; color: #e8f5e9; display: flex; align-items: center; gap: 10px;">
                    <i class="tim-icons icon-single-02" style="color: #f4a261;"></i>
                    <span>Gestión de Usuarios</span>
                </a>
                <ul id="userSubmenu" style="list-style: none; padding-left: 20px; display: none; margin-top: 10px;">
                    <li style="padding: 5px 0;">
                        <a href="{{ route('profile.edit') }}" style="text-decoration: none; color: #e8f5e9; display: flex; align-items: center; gap: 10px;">
                            <i class="tim-icons icon-pencil" style="color: #2a9d8f;"></i>
                            <span>Mi Perfil</span>
                        </a>
                    </li>
                   
                </ul>
            </li>

            <!-- Datos Recopilados -->
            <li style="border-bottom: 1px solid #2c2c2c; padding: 10px 0;">
                <a href="{{ route('visualizador') }}" style="text-decoration: none; color: #e8f5e9; display: flex; align-items: center; gap: 10px;">
                    <i class="tim-icons icon-tablet-2" style="color: #457b9d;"></i>
                    <span>Datos Recopilados</span>
                </a>
            </li>

            <!-- Gráficas -->
            <li style="border-bottom: 1px solid #2c2c2c; padding: 10px 0;">
                <a href="{{ route('graficas') }}" style="text-decoration: none; color: #e8f5e9; display: flex; align-items: center; gap: 10px;">
                    <i class="tim-icons icon-chart-bar-32" style="color: #264653;"></i>
                    <span>Gráficas del Sensor</span>
                </a>
            </li>

            <!-- Ubicación de Sensores -->
            <li style="border-bottom: 1px solid #2c2c2c; padding: 10px 0;">
                <a href="{{ route('pages.maps') }}" style="text-decoration: none; color: #e8f5e9; display: flex; align-items: center; gap: 10px;">
                    <i class="tim-icons icon-pin" style="color: #2a9d8f;"></i>
                    <span>Ubicación de Sensores</span>
                </a>
            </li>

            <!-- Alertas y Notificaciones -->
            <li style="border-bottom: 1px solid #2c2c2c; padding: 10px 0;">
                <a href="{{ route('pages.notifications') }}" style="text-decoration: none; color: #e8f5e9; display: flex; align-items: center; gap: 10px;">
                    <i class="tim-icons icon-bell-55" style="color: #e76f51;"></i>
                    <span>Alertas y Notificaciones</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<script>
    // Función para ocultar y mostrar el menú lateral
    document.getElementById('toggleMenu').addEventListener('click', function() {
        const sidebar = document.getElementById('sidebar');
        sidebar.style.transform = sidebar.style.transform === 'translateX(-100%)' ? 'translateX(0)' : 'translateX(-100%)';
    });

    // Función para mostrar/ocultar submenús
    function toggleSubmenu(id) {
        const submenu = document.getElementById(id);
        submenu.style.display = submenu.style.display === 'none' || submenu.style.display === '' ? 'block' : 'none';
    }
</script>
