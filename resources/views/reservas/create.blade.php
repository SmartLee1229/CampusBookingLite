@extends('layout')

@section('content')

<nav aria-label="breadcrumb" class="mb-3">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('reservas.index') }}">Reservas</a></li>
    <li class="breadcrumb-item active">Nueva</li>
  </ol>
</nav>

<div class="card shadow border-0">
    <div class="card-body">

        <h4 class="mb-3">Crear nueva reserva</h4>

        <form action="{{ route('reservas.store') }}" method="POST">
            @csrf

            @include('reservas.partials.form')

            <button class="btn btn-success mt-3">Guardar</button>
            <a href="{{ route('reservas.index') }}" class="btn btn-secondary mt-3">Volver</a>
        </form>
    </div>
</div>

@endsection
