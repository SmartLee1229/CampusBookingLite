@extends('layout')

@section('content')

<nav aria-label="breadcrumb" class="mb-3">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('reservas.index') }}">Reservas</a></li>
    <li class="breadcrumb-item active">Editar</li>
  </ol>
</nav>

<div class="card shadow border-0">
    <div class="card-body">

        <h4 class="mb-3">Editar reserva</h4>

        <form action="{{ route('reservas.update', $reserva) }}" method="POST">
            @csrf
            @method('PUT')

            @include('reservas.partials.form')

            <button class="btn btn-warning mt-3">Actualizar</button>
            <a href="{{ route('reservas.index') }}" class="btn btn-secondary mt-3">Volver</a>
        </form>

    </div>
</div>

@endsection
