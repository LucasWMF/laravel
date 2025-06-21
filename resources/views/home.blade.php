@extends('layouts.app')
@section('content')

    <div class="container mt-5">
        <div class="text-center mb-5">
            <h1>Sistema de Anúncios</h1>
            <p class="text-muted">Gerencie veículos, proprietários e anúncios</p>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">

            {{-- Formulários --}}
            <div class="col d-grid">
                <a href="{{ route('veiculo-formulario') }}" class="btn btn-primary btn-lg">Cadastrar Veículo</a>
            </div>
            <div class="col d-grid">
                <a href="{{ route('proprietario-formulario') }}" class="btn btn-success btn-lg">Cadastrar Proprietário</a>
            </div>
            <div class="col d-grid">
                <a href="{{ route('anuncio-formulario') }}" class="btn btn-info btn-lg text-white">Cadastrar Anúncio</a>
            </div>

            {{-- Listagens --}}
            <div class="col d-grid">
                <a href="{{ route('veiculo-listar') }}" class="btn btn-outline-primary btn-lg">Listar Veículos</a>
            </div>
            <div class="col d-grid">
                <a href="{{ route('proprietario-listar') }}" class="btn btn-outline-success btn-lg">Listar Proprietários</a>
            </div>
            <div class="col d-grid">
                <a href="{{ route('anuncio-listar') }}" class="btn btn-outline-info btn-lg">Listar Anúncios</a>
            </div>

        </div>
    </div>

@endsection