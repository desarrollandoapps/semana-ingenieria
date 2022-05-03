<h1 class="fw-titulo-conf py-5">{{ $modo }} Evento</h1>

@if ( count( $errors ) > 0 )
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ( $errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">
    <div class="form-floating">
        <input type="number" class="form-control" placeholder="" name="dia" id="dia" value="{{ isset( $evento->dia ) ? $evento->dia : old('dia') }}">
        <label for="dia">Día </label>
    </div>
    <br>

    <div class="form-floating">
        <input type="date" class="form-control" placeholder="" name="fecha" id="fecha" value="{{ isset( $evento->fecha ) ? $evento->fecha : old('fecha') }}">
        <label for="fecha">Fecha </label>
    </div>
    <br>

    <div class="form-floating">
        <input type="text" class="form-control" placeholder="" name="horario" id="horario" value="{{ isset( $evento->horario ) ? $evento->horario : old('horario') }}">
        <label for="horario">Horario </label>
    </div>
    <br>

    <div class="form-floating">
        <textarea class="form-control" placeholder="" name="tema" id="tema">{{ isset( $evento->tema ) ? $evento->tema : old('tema') }}</textarea>
        <label for="tema">Tema </label>
    </div>
    <br>

    <div class="form-floating">
        <input type="number" class="form-control" placeholder="" name="conferencista_id" id="conferencista_id" value="{{ isset( $evento->conferencista ) ? $evento->conferencista : old('conferencista') }}">
        <label for="conferencista_id">Conferencista </label>
    </div>
    <br>

    <div class="form-floating">
        <input type="text" class="form-control" placeholder="" name="lugar" id="lugar" value="{{ isset( $evento->lugar ) ? $evento->lugar : old('lugar') }}">
        <label for="lugar">Lugar </label>
    </div>
    <br>

    <div class="form-floating">
        <input type="text" class="form-control" placeholder="" name="enlaceVirtual" id="enlaceVirtual" value="{{ isset( $evento->enlaceVirtual ) ? $evento->enlaceVirtual : old('enlaceVirtual') }}">
        <label for="enlaceVirtual">Enlace Virtual </label>
    </div>
    <br>

    <div class="form-floating">
        <input type="text" class="form-control" placeholder="" name="colaborador" id="colaborador" value="{{ isset( $evento->colaborador ) ? $evento->colaborador : old('colaborador') }}">
        <label for="colaborador">Colaborador </label>
    </div>
    <br>

    <div class="form-floating">
        <input type="text" class="form-control" placeholder="" name="tipoEvento" id="tipoEvento" value="{{ isset( $evento->tipoEvento ) ? $evento->tipoEvento : old('tipoEvento') }}">
        <label for="tipoEvento">Tipo Evento </label>
    </div>

    <br>
    <br>
    <input type="submit" class="btn btn-success" value="{{ $modo }} evento">
    <a href="{{ url( 'evento/') }}" class="btn btn-primary" >Regresar</a>
    <br>
    <br>
    <br>
</div>