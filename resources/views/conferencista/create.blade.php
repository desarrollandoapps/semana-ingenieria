@extends('layouts.gestion')

@section('content')
    <div class="container">

        <form action="{{ url( '/conferencista/' )}}" method="post" enctype="multipart/form-data">
            @csrf
            @include('conferencista.form', [ 'modo' => 'Crear' ])
        </form>
    </div>
@endsection