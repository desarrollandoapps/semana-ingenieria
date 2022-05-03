<h1 class="fw-titulo-conf py-5">{{ $modo }} Conferencista</h1>

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
        <input type="text" class="form-control" placeholder="" name="nombre" id="nombre" value="{{ isset( $conferencista->nombre ) ? $conferencista->nombre : old('nombre') }}">
        <label for="nombre">Nombre </label>
    </div>
    <br>

    <div class="form-floating">
        <input type="text" class="form-control" placeholder="" name="pais" id="pais" value="{{ isset( $conferencista->pais ) ? $conferencista->pais : old('pais') }}">
        <label for="pais">País </label>
    </div>
    <br>

    <div class="form-floating">
        <input type="text" class="form-control" placeholder="" name="correo" id="correo" value="{{ isset( $conferencista->correo ) ? $conferencista->correo : old('correo') }}">
        <label for="correo">Correo </label>
    </div>
    <br>

    <div class="form-floating">
        <textarea class="form-control" placeholder="" name="cv" id="cv">{{ isset( $conferencista->cv ) ? $conferencista->cv : old('cv') }}</textarea>
        <label for="cv">Curriculum Vitae </label>
    </div>
    <br>

    <label for="foto">Foto: </label>
    @if ( isset( $conferencista->foto ) )
    <img class="img-thumbnail img-fluid" src="{{ asset('storage') . '/' . $conferencista->foto }}" width="50" alt="">
    @endif

    <input type="file" class="form-control" name="foto" id="foto">
    <br>
    <br>
    <input type="submit" class="btn btn-success" value="{{ $modo }} conferencista">
    <a href="{{ url( 'conferencista/') }}" class="btn btn-primary" >Regresar</a>
    <br>
    <br>
    <br>
</div>