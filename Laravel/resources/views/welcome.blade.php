@extends('layouts.app') 

@section('content')
    <div class="header py-20 py-lg-25" style="background: linear-gradient(135deg, #6a11cb, #2575fc);">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <h1 class="text-white display-4 font-weight-bold">{{ __('¡Bienvenido!') }}</h1>
                        <p class="text-lead text-light">
                            {{ __('Explora nuestro proyecto universitario sobre sensores y descubre cómo podemos medir y mejorar el mundo que nos rodea.') }}
                        </p>
                        <div class="mt-4">
                            <a href="{{ route('register') }}" class="btn btn-lg btn-secondary">
                                {{ __('Registrarse') }}
                            </a>
                            <a href="{{ route('login') }}" class="btn btn-lg btn-primary ml-2">
                                {{ __('Iniciar Sesión') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2560 160" preserveAspectRatio="none">
                <polygon class="fill-white" points="2560 0 2560 160 0 160"></polygon>
            </svg>
        </div>
    </div>
@endsection
