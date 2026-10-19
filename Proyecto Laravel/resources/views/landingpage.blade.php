@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="p-5 mb-4 bg-white rounded-3 shadow-sm border text-center">
        <div class="container-fluid py-4">
            <h1 class="display-4 fw-bold text-primary">Bienvenido a MiSistema CRM</h1>
            <p class="col-md-10 fs-5 mx-auto text-muted mt-3">
                Esta es la <strong>Landing Page</strong> principal para usuarios visitantes. Aquí puedes conocer nuestras funciones de gestión de clientes, seguimiento de leads y administración de proyectos.
            </p>
            <hr class="my-4">
            @guest
                <p class="fs-6 text-secondary">Inicia sesión o regístrate para acceder al panel de control privado.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mt-3">
                    <a href="{{ route('login') }}" class="btn btn-primary btn-lg px-4 me-sm-3 fw-semibold">Iniciar Sesión</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-secondary btn-lg px-4 fw-semibold">Crear Cuenta</a>
                </div>
            @else
                <div class="alert alert-success d-inline-block px-4">
                    ✅ Ya estás autenticado como <strong>{{ Auth::user()->name }}</strong>.
                </div>
                <div class="mt-2">
                    <a href="{{ route('dashboard') }}" class="btn btn-success btn-lg px-4 fw-semibold">Ir al Dashboard</a>
                </div>
            @endguest
        </div>
    </div>

    <div class="row text-center mt-5">
        <div class="col-md-4">
            <div class="card p-4 shadow-sm h-100 border-0">
                <div class="fs-1 text-primary mb-2">📈</div>
                <h3 class="h5 fw-bold">Ventas & Leads</h3>
                <p class="text-muted small">Monitorea tus KPIs y el flujo comercial en tiempo real.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 shadow-sm h-100 border-0">
                <div class="fs-1 text-primary mb-2">⚡</div>
                <h3 class="h5 fw-bold">Gestión Agil</h3>
                <p class="text-muted small">Organiza actividades pendientes y resolución de tickets.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 shadow-sm h-100 border-0">
                <div class="fs-1 text-primary mb-2">🔒</div>
                <h3 class="h5 fw-bold">Acceso Seguro</h3>
                <p class="text-muted small">Protección de rutas mediante autenticación de usuarios.</p>
            </div>
        </div>
    </div>
</div>
@endsection
