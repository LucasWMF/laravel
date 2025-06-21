@extends('layouts.app')
@section('content')

    <div class="container mt-4">
        <h2 class="mb-4">Listar Proprietário Cadastrados</h2>
        <table class="table table-hover table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proprietarios as $proprietario)
                    <tr>
                        <td>{{ $proprietario->id }}</td>
                        <td>{{ $proprietario->nome }}</td>
                        <td>{{ $proprietario->cpf }}</td>
                        <td>{{ $proprietario->tel }}</td>
                        <td>{{ $proprietario->email }}</td>
                        <td>
                            <a href="/proprietario/editar/{{ $proprietario->id }}"
                                class="btn btn-sm btn-warning me-1">Atualizar</a>
                            <a href="/proprietario/remove/{{ $proprietario->id }}" class="btn btn-sm btn-danger"
                                onclick="return confirm('Deseja mesmo Deletar essa resposta?')">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection