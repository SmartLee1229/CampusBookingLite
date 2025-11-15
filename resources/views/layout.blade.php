<!DOCTYPE html>
<html>
<head>
    <title>CampusBooking Lite</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body { padding-top: 20px; }
        .card { border-radius: 12px; }
    </style>
</head>

<body>

{{-- NAVBAR --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard') }}">🏫 CampusBooking Lite</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                       href="{{ route('dashboard') }}">
                        <i class="bi bi-house-door-fill"></i> Inicio
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('espacios*') ? 'active' : '' }}"
                       href="{{ route('espacios.index') }}">
                        <i class="bi bi-building"></i> Espacios
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('reservas*') ? 'active' : '' }}"
                       href="{{ route('reservas.index') }}">
                        <i class="bi bi-calendar-check"></i> Reservas
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>


<div class="container">

    {{-- Mensajes --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @yield('content')
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
