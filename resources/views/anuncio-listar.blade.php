@extends('layouts.app')
@section('content')

    <div class="container mt-4">
        <h2 class="mb-4">Listar Anúncios Cadastrados</h2>
        <table class="table table-hover table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Título</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Data de Publicação</th>
                    <th scope="col">Proprietário</th>
                    <th scope="col">Veículo</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($anuncios as $anuncio)
                    <tr>
                        <td>{{ $anuncio->id }}</td>
                        <td>{{ $anuncio->titulo }}</td>
                        <td>{{ $anuncio->descricao }}</td>
                        <td>R$ {{ number_format($anuncio->preco, 2, ',', '.') }}</td>
                        <td>{{ \Carbon\Carbon::parse($anuncio->data_publicacao)->format('d/m/Y') }}</td>
                        <td>{{ $anuncio->proprietario->nome }}</td>
                        <td>{{ $anuncio->veiculo->marca }} - {{ $anuncio->veiculo->modelo }}</td>
                        <td>
                            <a href="/anuncio/editar/{{ $anuncio->id }}" class="btn btn-sm btn-warning me-1">Atualizar</a>
                            <a href="/anuncio/remove/{{ $anuncio->id }}" class="btn btn-sm btn-danger"
                                onclick="return confirm(`Deseja mesmo Deletar essa resposta?`)">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection