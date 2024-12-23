@extends('layouts.app', ['page' => __('Perfil de Usuario'), 'pageSlug' => 'profile'])

@section('content')
<div class="row" style="background: #121212; min-height: 100vh; padding: 20px; color: white;">
    <!-- Editar Perfil -->
    <div class="col-md-8">
        <div class="card mb-4" style="box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5); background: #181818; color: #e4e4e4;">
            <div class="card-header text-center" style="background: linear-gradient(135deg, #1b4332, #2d6a4f); color: white;">
                <h5 class="title">{{ __('Editar Perfil') }}</h5>
            </div>
            <form method="post" action="{{ route('profile.update') }}" autocomplete="off">
                <div class="card-body">
                    @csrf
                    @method('put')

                    @include('alerts.success')

                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <label>{{ __('Nombre') }}</label>
                        <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Nombre') }}" value="{{ old('name', auth()->user()->name) }}">
                        @include('alerts.feedback', ['field' => 'name'])
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <label>{{ __('Correo Electrónico') }}</label>
                        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Correo Electrónico') }}" value="{{ old('email', auth()->user()->email) }}">
                        @include('alerts.feedback', ['field' => 'email'])
                    </div>

                    <div class="form-group">
                        <label>{{ __('Fecha de Registro') }}</label>
                        <input type="text" class="form-control" value="{{ auth()->user()->created_at->format('d/m/Y H:i') }}" disabled>
                    </div>

                    <div class="form-group">
                        <label>{{ __('Última Actualización del Perfil') }}</label>
                        <input type="text" class="form-control" value="{{ auth()->user()->updated_at->format('d/m/Y H:i') }}" disabled>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-fill btn-primary" style="background: #1b4332; color: white; border: none;">{{ __('Guardar Cambios') }}</button>
                </div>
            </form>
        </div>

        <!-- Cambiar Contraseña -->
        <div class="card" style="box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5); background: #181818; color: #e4e4e4;">
            <div class="card-header text-center" style="background: linear-gradient(135deg, #ee9b00, #ca6702); color: white;">
                <h5 class="title">{{ __('Contraseña') }}</h5>
            </div>
            <form method="post" action="{{ route('profile.password') }}" autocomplete="off">
                <div class="card-body">
                    @csrf
                    @method('put')

                    @include('alerts.success', ['key' => 'password_status'])

                    <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                        <label>{{ __('Contraseña Actual') }}</label>
                        <input type="password" name="old_password" class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" placeholder="{{ __('Contraseña Actual') }}" required>
                        @include('alerts.feedback', ['field' => 'old_password'])
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                        <label>{{ __('Nueva Contraseña') }}</label>
                        <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Nueva Contraseña') }}" required>
                        @include('alerts.feedback', ['field' => 'password'])
                    </div>
                    <div class="form-group">
                        <label>{{ __('Confirmar Nueva Contraseña') }}</label>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirmar Nueva Contraseña') }}" required>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-fill btn-primary" style="background: #ca6702; color: white; border: none;">{{ __('Cambiar Contraseña') }}</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Información del Usuario -->
    <div class="col-md-4">
        <div class="card card-user" style="box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5); background: #181818; color: #e4e4e4;">
            <div class="card-body text-center">
                <div class="author">
                    <a href="#">
                        <img class="avatar mb-3" src="{{ asset('black') }}/img/kaguya.jpg" alt="" style="border-radius: 50%; width: 120px; height: 120px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);">
                        <h5 class="title mt-3">{{ auth()->user()->name }}</h5>
                    </a>
                    <p class="description">
                        {{ __('Usuario') }}
                    </p>
                </div>
                <div class="card-description mt-3">
                    {{ __('En este apartado puedes actualizar tu información de usuario y contraseña.') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
