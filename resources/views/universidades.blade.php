@extends('layouts.main')

@section('content')
<div class="content">
    <h2 class="py-5 fw-titulo-1">Universidades</h2>
    <div class="row g-4">
        <div class="col-sm-4">
            <div class="card">
                <img src="{{ asset('images/universidades/universidad1.png') }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Universidad de Ibagué</h5>
                    <p class="card-text">Carlos Antonio Meisel Donoso</p>
                    <a href="mailto:carlos.meisel@unibague.edu.co" class="btn btn-primary">carlos.meisel@unibague.edu.co</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <img src="{{ asset('images/universidades/universidad2.jpg') }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">UNAD</h5>
                    <p class="card-text">Alejandro Mendez</p>
                    <a href="mailto:alejandro.mendez@unad.edu.co" class="btn btn-primary">alejandro.mendez@unad.edu.co</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <img src="{{ asset('images/universidades/universidad3.png') }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Universidad del Tolima</h5>
                    <p class="card-text">Henry Pulido</p>
                    <a href="mailto:hpulido@ut.edu.co" class="btn btn-primary">hpulido@ut.edu.co</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection