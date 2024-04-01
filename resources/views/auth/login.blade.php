@extends('layouts/blankLayout')

@section('title', 'Login Basic - Pages')

@section('page-style')
<link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}">
@endsection

@section('content')
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <div class="card">
                <div class="card-body">
                    <div class="app-brand justify-content-center">
                        <span class="app-brand-logo demo">
                            <img src="assets\img\icons\brands\reci.png" alt="Descripción de la imagen">
                        </span>
                        </a>
                    </div>
                    <h4 class="mb-2">Bienvenido a ReciclaguaS</h4>
                    <p class="mb-4">Por favor, inicie sesión:</p>
                        <a href="{{ url('/') }}" class="app-brand-link gap-2">
                            <span class="app-brand-logo demo">@include('_partials.macros', ["width" => 25, "withbg" => 'var(--bs-primary)'])</span>
                            <span class="app-brand-text demo text-body fw-bold">{{ config('variables.templateName') }}</span>
                        </a>
                    </div>
                    <h4 class="mb-2">Bienvenido a recicla agua</h4>
                    <p class="mb-4">Por favor, inicie sesión:</p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Usuario</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Ingresa tu usuario" autofocus>

                        </div>
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">Contraseña</label>
                                <a href="{{ url('auth/forgot-password-basic') }}">
                                    <small>¿Olvidaste tu contraseña?</small>
                                </a>
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-primary d-grid w-100" type="submit">Iniciar Sesión</button>
                        </div>
                    </form>

                </div>
            </div>
            </div>
    </div>
</div>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (session('swal'))
    <script>
        Swal.fire({
            title: '{{ session('swal')['title'] }}',
            text: '{{ session('swal')['text'] }}',
            icon: '{{ session('swal')['type'] }}',
            confirmButtonText: 'Aceptar',
            confirmButtonColor: '{{ session('swal')['confirmButtonColor'] }}',
            allowOutsideClick: false,
        });
    </script>
@endif
@endsection
