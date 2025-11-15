<div class="row">

    <div class="col-md-6 mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control"
               value="{{ old('nombre', $espacio->nombre ?? '') }}" required>
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Tipo</label>
        <input type="text" name="tipo" class="form-control"
               value="{{ old('tipo', $espacio->tipo ?? '') }}" required>
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Capacidad</label>
        <input type="number" name="capacidad" class="form-control"
               value="{{ old('capacidad', $espacio->capacidad ?? '') }}" required>
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Ubicación</label>
        <input type="text" name="ubicacion" class="form-control"
               value="{{ old('ubicacion', $espacio->ubicacion ?? '') }}" required>
    </div>

</div>
