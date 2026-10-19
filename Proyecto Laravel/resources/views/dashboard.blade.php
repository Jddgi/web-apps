@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card bg-primary text-white shadow-sm border-0">
                <div class="card-body p-4 d-flex justify-content-between align-items-center">
                    <div>
                        <h2 class="fw-bold mb-1">📊 Panel de Control (Dashboard)</h2>
                        <p class="mb-0">Bienvenido de vuelta, <strong>{{ Auth::user()->name }}</strong> ({{ Auth::user()->email }})</p>
                    </div>
                    <span class="badge bg-light text-primary fs-6 px-3 py-2">Usuario Autenticado</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Indicadores KPI -->
    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-center p-3">
                <span class="text-muted small fw-semibold">VENTAS TOTALES</span>
                <h3 class="text-success fw-bold my-1">$145,300</h3>
                <span class="text-muted extra-small">📈 +12% este mes</span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-center p-3">
                <span class="text-muted small fw-semibold">LEADS NUEVOS</span>
                <h3 class="text-primary fw-bold my-1">14</h3>
                <span class="text-muted extra-small">🔥 +5 vs ayer</span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-center p-3">
                <span class="text-muted small fw-semibold">TICKETS RESUELTOS</span>
                <h3 class="text-info fw-bold my-1">22</h3>
                <span class="text-muted extra-small">✅ Hoy</span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm text-center p-3">
                <span class="text-muted small fw-semibold">INDICADOR KPI</span>
                <h3 class="text-warning fw-bold my-1">78%</h3>
                <span class="text-muted extra-small">🎯 Meta: 85%</span>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <!-- Actividades Pendientes -->
        <div class="col-md-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white fw-bold py-3">
                    📋 Actividades Pendientes
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            📞 Realizar llamadas a prospectos
                            <span class="badge bg-primary rounded-pill">5 llamadas</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            ✉️ Responder correos de seguimiento
                            <span class="badge bg-warning rounded-pill">8 correos</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            ✔️ Revisar tareas asignadas
                            <span class="badge bg-secondary rounded-pill">3 pendientes</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Pipeline Comercial -->
        <div class="col-md-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white fw-bold py-3">
                    🎯 Pipeline Comercial
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <small class="fw-semibold">Prospecting (30%)</small>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-primary" style="width: 30%"></div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <small class="fw-semibold">Qualification (50%)</small>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-info" style="width: 50%"></div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <small class="fw-semibold">Proposal (75%)</small>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-warning" style="width: 75%"></div>
                        </div>
                    </div>
                    <div>
                        <small class="fw-semibold">Closed Won (90%)</small>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-success" style="width: 90%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vue Component Integration -->
    <div class="row mt-4">
        <div class="col-12">
            <example-component></example-component>
        </div>
    </div>
</div>
@endsection
