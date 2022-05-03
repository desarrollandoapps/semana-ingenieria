@extends('layouts.gestion')

@section('content')
    <div class="container">

        <form action="{{ url( '/evento/' )}}" method="post" enctype="multipart/form-data">
            @csrf
            @include('evento.form', [ 'modo' => 'Crear' ])
        </form>
    </div>
@endsection