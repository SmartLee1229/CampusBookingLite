@extends('layout')

@section('content')

<nav aria-label="breadcrumb" class="mb-3">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Reservas</li>
  </ol>
</nav>

<div class="d-flex justify-content-between mb-3">
    <h3>Listado de Reservas</h3>
    <a class="btn btn-success" href="{{ route('reservas.create') }}">
        <i class="bi bi-plus-circle"></i> Nueva Reserva
    </a>
</div>

<div class="card shadow border-0">
    <div class="card-body">

        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Espacio</th>
                    <th>Solicitante</th>
                    <th>Fecha</th>
                    <th>Inicio</th>
                    <th>Fin</th>
                    <th>Motivo</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
            @foreach($reservas as $r)
                <tr>
                    <td>{{ $r->id }}</td>
                    <td>{{ $r->espacio->nombre }}</td>
                    <td>{{ $r->solicitante }}</td>
                    <td>{{ $r->fecha }}</td>
                    <td>{{ $r->hora_inicio }}</td>
                    <td>{{ $r->hora_fin }}</td>
                    <td>{{ $r->motivo }}</td>

                    <td>
                        <a href="{{ route('reservas.edit', $r) }}" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil-square"></i>
                        </a>

                        <form action="{{ route('reservas.destroy', $r) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"
                                onclick="return confirm('¿Eliminar reserva?')">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>

        {{ $reservas->links('pagination::bootstrap-5') }}

    </div>
</div>

@endsection
