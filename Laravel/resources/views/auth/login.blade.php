@extends('layouts.app', ['class' => 'login-page', 'page' => __('Página de Inicio de Sesión'), 'contentClass' => 'login-page'])

@section('content')
    <div class="col-md-10 text-center ml-auto mr-auto">
        <h3 class="mb-5" style="color: #f39c12; font-size: 26px; font-weight: bold;">Inicia sesión para gestionar los sensores de temperatura y humedad de la UNSA Arequipa.</h3>
    </div>
    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <form class="form" method="post" action="{{ route('login') }}">
            @csrf

            <div class="card card-login card-light" style="background: #ffffff; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                <div class="card-header text-center" style="background-color: #f39c12; color: white; border-radius: 10px 10px 0 0;">
                    <h1 class="card-title" style="font-size: 28px;">{{ __('Iniciar Sesión') }}</h1>
                </div>
                <div class="card-body">
                    <p class="text-dark mb-2" style="color: #f39c12;">Inicia sesión con tus credenciales para acceder a las lecturas de temperatura, humedad y más. <br> Ejemplo de acceso: <strong>admin@unsa.com</strong> y contraseña <strong>secreta</strong></p>

                    <!-- Campo de correo electrónico -->
                    <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text" style="background-color: #f39c12; color: white;">
                                <i class="tim-icons icon-email-85"></i>
                            </div>
                        </div>
                        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Correo Electrónico') }}">
                        @include('alerts.feedback', ['field' => 'email'])
                    </div>

                    <!-- Campo de contraseña -->
                    <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text" style="background-color: #f39c12; color: white;">
                                <i class="tim-icons icon-lock-circle"></i>
                            </div>
                        </div>
                        <input type="password" placeholder="{{ __('Contraseña') }}" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                        @include('alerts.feedback', ['field' => 'password'])
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-lg btn-block mb-3" style="background-color: #f39c12; color: white; border-radius: 30px; font-size: 18px;">{{ __('Iniciar') }}</button>
                    <div class="pull-left">
                        <h6>
                            <a href="{{ route('register') }}" class="link footer-link" style="color: #f39c12; font-weight: bold;">{{ __('Crear Cuenta') }}</a>
                        </h6>
                    </div>
                    <div class="pull-right">
                        <h6>
                            <a href="{{ route('password.request') }}" class="link footer-link" style="color: #f39c12; font-weight: bold;">{{ __('¿Olvidaste tu contraseña?') }}</a>
                        </h6>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
