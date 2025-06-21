@extends('layouts.app')
@section('content')

    <h2>Cadastrar Anúncio</h2>
    <form action="{{ route('anuncio-store') }}" method="POST">
        @csrf

        <input type="hidden" name="id" value="{{ $anuncios->id ?? old('id') }}">

        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo"
                value="{{ $anuncios->titulo ?? old('titulo') }}" required>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="4"
                required>{{ $anuncios->descricao ?? old('descricao') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="preco" class="form-label">Preço (R$)</label>
            <input type="number" step="0.01" class="form-control" id="preco" name="preco"
                value="{{ $anuncios->preco ?? old('preco') }}" required>
        </div>

        <div class="mb-3">
            <label for="data_publicacao" class="form-label">Data de Publicação</label>
            <input type="date" class="form-control" id="data_publicacao" name="data_publicacao"
                value="{{ $anuncios->data_publicacao ?? old('data_publicacao') }}" required>
        </div>

        <!-- PROPRIETÁRIO -->
        <div class="mb-3">
            <label for="id_proprietario" class="form-label">Proprietário</label>
            <select class="form-select" name="id_proprietario" id="id_proprietario" required>
                <option value="">Selecione um proprietário</option>
                @foreach ($proprietarios as $proprietario)
                    <option value="{{ $proprietario->id }}" @if (($anuncios->id_proprietario ?? old('id_proprietario')) == $proprietario->id) selected @endif>
                        {{ $proprietario->nome }} ({{ $proprietario->cpf }})
                    </option>
                @endforeach
            </select>
        </div>

        <!-- VEÍCULO -->
        <div class="mb-3">
            <label for="id_veiculo" class="form-label">Veículo</label>
            <select class="form-select" name="id_veiculo" id="id_veiculo" required>
                <option value="">Selecione um veículo</option>
                @foreach ($veiculos as $veiculo)
                    <option value="{{ $veiculo->id }}" @if (($anuncios->id_veiculo ?? old('id_veiculo')) == $veiculo->id) selected
                    @endif>
                        {{ $veiculo->marca }} - {{ $veiculo->modelo }} ({{ $veiculo->placa }})
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar Anúncio</button>
    </form>

@endsection