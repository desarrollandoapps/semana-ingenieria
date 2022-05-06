@extends('layouts.main')

@section('content')
<div class="content">
    <h2 class="py-5 fw-titulo-1">Empresas Aliadas</h2>
    <div class="row g-4">
        <div class="col-sm-4">
            <div class="card">
                <img src="{{ asset('images/empresas/empresa1.png') }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">ITMakers</h5>
                    <p class="card-text">Gabriel Vargas</p>
                    <a href="mailto:gabriel.vargas@itmakers.com.co" class="btn btn-primary">gabriel.vargas@itmakers.com.co</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <img src="{{ asset('images/empresas/empresa2.jpg') }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Consultores Tecnológicos</h5>
                    <p class="card-text">Alvaro Henao</p>
                    <a href="mailto:ahenao@consultorestecnologicos.net" class="btn btn-primary">ahenao@consultorestecnologicos.net</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <img src="{{ asset('images/empresas/empresa3.png') }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Lazarosoff</h5>
                    <p class="card-text">Lázaro Jaramillo - Gina Jaramillo</p>
                    <a href="mailto:gerencia@lazarosoftware.com" class="btn btn-primary mb-3">gerencia@lazarosoftware.com</a>
                    {{-- <a href="mailto:administracion@lazarosoftware.com" class="btn btn-primary">administracion@lazarosoftware.com</a> --}}
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <img src="{{ asset('images/empresas/empresa4.png') }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">SysCafé</h5>
                    <p class="card-text">Hernán Dario Trujillo</p>
                    <a href="mailto:hernandario@syscafe.com.co" class="btn btn-primary">hernandario@syscafe.com.co</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <img src="{{ asset('images/empresas/empresa5.png') }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">CloudAPPi</h5>
                    <p class="card-text">Ernesto Correa</p>
                    <a href="mailto: ernesto.correa@cloudappi.net" class="btn btn-primary">ernesto.correa@cloudappi.net</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <img src="{{ asset('images/empresas/empresa6.png') }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">SOAINT</h5>
                    <p class="card-text">Edwin Rozo - Nury Penagos</p>
                    <a href="mailto: erozo@soaint.com" class="btn btn-primary">erozo@soaint.com</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <img src="{{ asset('images/empresas/empresa7.png') }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Pixeling</h5>
                    <p class="card-text">Diego Valencia</p>
                    <a href="mailto: diego.pixeling@gmail.com" class="btn btn-primary">diego.pixeling@gmail.com</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <img src="{{ asset('images/empresas/empresa8.jpg') }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Manawa</h5>
                    <p class="card-text">Javier Lozano</p>
                    <a href="mailto: javier@manawac.co.uk" class="btn btn-primary">javier@manawac.co.uk</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <img src="{{ asset('images/empresas/empresa9.png') }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Indra</h5>
                    {{-- <p class="card-text"></p> --}}
                    {{-- <a href="mailto: diego.pixeling@gmail.com" class="btn btn-primary">diego.pixeling@gmail.com</a> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection