<div class="row">

    <div class="col-md-6 mb-3">
        <label class="form-label">Espacio</label>
        <select name="espacio_id" class="form-select" required>
            @foreach($espacios as $e)
                <option value="{{ $e->id }}"
                    @selected(old('espacio_id', $reserva->espacio_id ?? '') == $e->id)>
                    {{ $e->nombre }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Solicitante</label>
        <input type="text" name="solicitante" class="form-control"
            value="{{ old('solicitante', $reserva->solicitante ?? '') }}" required>
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Fecha</label>
        <input type="date" name="fecha" class="form-control"
            value="{{ old('fecha', $reserva->fecha ?? '') }}" required>
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Hora inicio</label>
        <input type="time" name="hora_inicio" class="form-control"
            value="{{ old('hora_inicio', $reserva->hora_inicio ?? '') }}" required>
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Hora fin</label>
        <input type="time" name="hora_fin" class="form-control"
            value="{{ old('hora_fin', $reserva->hora_fin ?? '') }}" required>
    </div>

    <div class="col-12 mb-3">
        <label class="form-label">Motivo</label>
        <textarea name="motivo" class="form-control" rows="2">{{ old('motivo', $reserva->motivo ?? '') }}</textarea>
    </div>

</div>
