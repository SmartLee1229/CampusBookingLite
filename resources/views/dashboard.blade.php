@extends('layout')

@section('content')
<h2 class="mb-4">Bienvenido</h2>

<div class="row">

    <div class="col-md-6 mb-4">
        <div class="card shadow border-0">
            <div class="card-body text-center">
                <i class="bi bi-building fs-1 text-primary"></i>
                <h4 class="mt-3">Gestión de Espacios</h4>
                <p class="text-muted">Administra aulas, laboratorios y salas.</p>
                <a href="{{ route('espacios.index') }}" class="btn btn-primary">Ir a Espacios</a>
            </div>
        </div>
    </div>

    <div class="col-md-6 mb-4">
        <div class="card shadow border-0">
            <div class="card-body text-center">
                <i class="bi bi-calendar-check fs-1 text-success"></i>
                <h4 class="mt-3">Reservas</h4>
                <p class="text-muted">Administra reservas de los espacios.</p>
                <a href="{{ route('reservas.index') }}" class="btn btn-success">Ir a Reservas</a>
            </div>
        </div>
    </div>

</div>
@endsection
