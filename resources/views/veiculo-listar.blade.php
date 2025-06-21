@extends('layouts.app')
@section('content')

    <div class="container mt-4">
        <h2 class="mb-4">Listar Veículos Cadastrados</h2>
        <table class="table table-hover table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Ano</th>
                    <th scope="col">Placa</th>
                    <th scope="col">Cor</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($veiculos as $veiculo)
                    <tr>
                        <td>{{ $veiculo->id }}</td>
                        <td>{{ $veiculo->marca }}</td>
                        <td>{{ $veiculo->modelo }}</td>
                        <td>{{ $veiculo->ano }}</td>
                        <td>{{ $veiculo->placa }}</td>
                        <td>{{ $veiculo->cor }}</td>
                        <td>
                            <a href="/veiculo/editar/{{ $veiculo->id }}" class="btn btn-sm btn-warning me-1">Atualizar</a>
                            <a href="/veiculo/remove/{{ $veiculo->id }}" class="btn btn-sm btn-danger"
                                onclick="return confirm('Deseja mesmo Deletar essa resposta?')">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection