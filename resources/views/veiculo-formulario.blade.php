@extends('layouts.app')
@section('content')

    <h2 class="mb-4">Cadastrar Veiculo</h2>
    <form action="{{ route('veiculo-store') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $veiculo->id ?? old('id') }}">

        <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <input type="text" class="form-control" name="marca" id="marca" value="{{ $veiculo->marca ?? old('marca') }}"
                required>
        </div>

        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo</label>
            <input type="text" class="form-control" name="modelo" id="modelo"
                value="{{ $veiculo->modelo ?? old('modelo') }}" required>
        </div>

        <div class="mb-3">
            <label for="ano" class="form-label">Ano</label>
            <input type="text" class="form-control" name="ano" id="ano" value="{{ $veiculo->ano ?? old('ano') }}" required>
        </div>

        <div class="mb-3">
            <label for="placa" class="form-label">Placa</label>
            <input type="text" class="form-control" name="placa" id="placa" value="{{ $veiculo->placa ?? old('placa') }}"
                required>
        </div>

        <div class="mb-3">
            <label for="cor" class="form-label">Cor</label>
            <input type="text" class="form-control" name="cor" id="cor" value="{{ $veiculo->cor ?? old('cor') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

@endsection