@extends('layout')

@section('content')

<nav aria-label="breadcrumb" class="mb-3">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Espacios</li>
  </ol>
</nav>

<div class="d-flex justify-content-between mb-3">
    <h3>Listado de Espacios</h3>
    <a class="btn btn-primary" href="{{ route('espacios.create') }}">
        <i class="bi bi-plus-circle"></i> Nuevo Espacio
    </a>
</div>

<div class="card shadow border-0">
    <div class="card-body">

        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Capacidad</th>
                    <th>Ubicación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

            @foreach($espacios as $e)
                <tr>
                    <td>{{ $e->id }}</td>
                    <td>{{ $e->nombre }}</td>
                    <td>{{ $e->tipo }}</td>
                    <td>{{ $e->capacidad }}</td>
                    <td>{{ $e->ubicacion }}</td>
                    <td>
                        <a href="{{ route('espacios.edit',$e) }}" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <form action="{{ route('espacios.destroy',$e) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"
                                onclick="return confirm('¿Eliminar?')">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>

        {{ $espacios->links('pagination::bootstrap-5') }}

    </div>
</div>

@endsection
