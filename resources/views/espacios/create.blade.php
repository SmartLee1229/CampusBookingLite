@extends('layout')

@section('content')

<nav aria-label="breadcrumb" class="mb-3">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{ route('espacios.index') }}">Espacios</a></li>
    <li class="breadcrumb-item active">Crear</li>
  </ol>
</nav>

<div class="card shadow border-0">
    <div class="card-body">
        <h4 class="mb-3">Crear Espacio</h4>

        <form action="{{ route('espacios.store') }}" method="POST">
            @csrf
            @include('espacios.partials.form')

            <button class="btn btn-primary mt-3">Guardar</button>
            <a href="{{ route('espacios.index') }}" class="btn btn-secondary mt-3">Volver</a>
        </form>
    </div>
</div>

@endsection
