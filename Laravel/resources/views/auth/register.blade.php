@extends('layouts.app', ['class' => 'register-page', 'page' => __('Página de Registro'), 'contentClass' => 'register-page'])

@section('content')
    <div class="row" style="background: #121212; min-height: 100vh; padding: 20px; color: white;">
        <!-- Información sobre el proyecto -->
        <div class="col-md-5 ml-auto">
            <div class="info-area info-horizontal mt-5" style="border-bottom: 1px solid #2c2c2c;">
                <div class="icon icon-warning" style="color: #f1faee;">
                    <i class="tim-icons icon-wifi"></i>
                </div>
                <div class="description">
                    <h3 class="info-title" style="color: #f39c12;">{{ __('Monitoreo Ambiental de Sensores') }}</h3>
                    <p class="description" style="color: #f1faee;">
                        {{ __('En la UNSA Arequipa, hemos desarrollado un sistema de monitoreo que utiliza sensores de temperatura y humedad para recopilar datos en tiempo real. Este proyecto es parte de nuestras investigaciones para mejorar la eficiencia energética y controlar condiciones ambientales críticas.') }}
                    </p>
                </div>
            </div>
            <div class="info-area info-horizontal" style="border-bottom: 1px solid #2c2c2c;">
                <div class="icon icon-primary" style="color: #f1faee;">
                    <i class="tim-icons icon-triangle-right-17"></i>
                </div>
                <div class="description">
                    <h3 class="info-title" style="color: #f39c12;">{{ __('Tecnología Innovadora') }}</h3>
                    <p class="description" style="color: #f1faee;">
                        {{ __('Utilizamos tecnología avanzada con sensores de última generación para garantizar lecturas precisas y confiables, lo que nos permite obtener datos valiosos para nuestros proyectos de investigación.') }}
                    </p>
                </div>
            </div>
            <div class="info-area info-horizontal">
                <div class="icon icon-info" style="color: #f1faee;">
                    <i class="tim-icons icon-trophy"></i>
                </div>
                <div class="description">
                    <h3 class="info-title" style="color: #f39c12;">{{ __('Impacto y Aplicaciones') }}</h3>
                    <p class="description" style="color: #f1faee;">
                        {{ __('Los datos recopilados por nuestros sensores permiten realizar análisis para mejorar los sistemas de control climático, contribuyendo al bienestar de la comunidad universitaria y fomentando la sostenibilidad ambiental.') }}
                    </p>
                </div>
            </div>
        </div>

        <!-- Formulario de Registro -->
        <div class="col-md-7 mr-auto">
            <div class="card card-register card-dark" style="background: #181818; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);">
                <div class="card-header text-center" style="background: linear-gradient(135deg, #f39c12, #e67e22); color: white;">
                    <h4 class="card-title" style="color: #ffffff;">{{ __('Registro del tigre') }}</h4>
                </div>
                <form class="form" method="post" action="{{ route('register') }}">
                    @csrf
                    <div class="card-body">
                        <div class="input-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text" style="background-color: #f39c12; color: white;">
                                    <i class="tim-icons icon-single-02"></i>
                                </div>
                            </div>
                            <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Nombre') }}" style="border-radius: 10px; color: #2c3e50;">
                            @include('alerts.feedback', ['field' => 'name'])
                        </div>

                        <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text" style="background-color: #f39c12; color: white;">
                                    <i class="tim-icons icon-email-85"></i>
                                </div>
                            </div>
                            <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Correo Electrónico') }}" style="border-radius: 10px; color: #2c3e50;">
                            @include('alerts.feedback', ['field' => 'email'])
                        </div>

                        <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text" style="background-color: #f39c12; color: white;">
                                    <i class="tim-icons icon-lock-circle"></i>
                                </div>
                            </div>
                            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Contraseña') }}" style="border-radius: 10px; color: #2c3e50;">
                            @include('alerts.feedback', ['field' => 'password'])
                        </div>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text" style="background-color: #f39c12; color: white;">
                                    <i class="tim-icons icon-lock-circle"></i>
                                </div>
                            </div>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirmar Contraseña') }}" style="border-radius: 10px; color: #2c3e50;">
                        </div>

                        <div class="form-check text-left">
                            <label class="form-check-label" style="color: #f1faee;">
                                <input class="form-check-input" type="checkbox" style="color: #f39c12;">
                                <span class="form-check-sign"></span>
                                {{ __('Estoy de acuerdo con los') }}
                                <a href="#" style="color: #f39c12;">{{ __('términos y condiciones') }}</a>.
                            </label>
                        </div>
                    </div>

                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary btn-round btn-lg" style="background-color: #f39c12; color: white; border-radius: 30px; font-size: 18px;">{{ __('Empezar') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
