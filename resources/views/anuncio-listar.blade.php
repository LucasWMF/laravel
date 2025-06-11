<style>
    * {
        outline: 1px solid #a3a3a3;
    }
</style>

<table>
    <thead>
        <tr>
            <th>Código</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Data de Publicação</th>
            <th>Proprietário</th>
            <th>Veículo</th>
            <th>Ações</th>
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
                    <a href="/anuncio/editar/{{ $anuncio->id }}">Atualizar</a> |
                    <a href="/anuncio/remover/{{ $anuncio->id }}" onclick="return confirm('Tem certeza que deseja excluir este anúncio?')">Excluir</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
