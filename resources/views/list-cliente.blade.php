<style>
    table, thead, tr, th, td {
        outline: 1px solid black;
        border-collapse: collapse;
        background-color: white;
    }
    th, td {
        text-align: center;
        padding: 1rem;
    }
    body{
        background-color:darkolivegreen;
        display: flex;
        /* align-items: center; */
        justify-content: center;
    }
</style>

<table>
    <thead>
        <tr>
            <th>Código</th>
            <th>Criado em</th>
            <th>Atualizado em</th>
            <th>Nome do Cliente</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->created_at }}</td>
                <td>{{ $cliente->updated_at }}</td>
                <td>{{ $cliente->nome }}</td>
                <td>
                    <a href="/cliente/remove/{{ $cliente->id }}">Excluir</a>
                    <a href="">Atualizar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $clientes->links() }}