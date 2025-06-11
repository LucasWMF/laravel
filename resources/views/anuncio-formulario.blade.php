<form action="{{ route('anuncio-store') }}" method="POST">
    @csrf

    <!-- ID invisível para atualização -->
    <input type="hidden" name="id" value="{{ $anuncio->id ?? old('id') }}">

    <!-- Título do Anúncio -->
    <label for="titulo">Título</label>
    <input type="text" name="titulo" id="titulo" value="{{ old('titulo') }}" required>

    <!-- Descrição do Anúncio -->
    <label for="descricao">Descrição</label>
    <textarea name="descricao" id="descricao" required>{{ old('descricao') }}</textarea>

    <!-- Preço do Anúncio -->
    
    <label for="preco">Preço</label>
    <input type="number" name="preco" id="preco" value="{{ old('preco') }}" required step="0.01">

    <!-- Data de Publicação -->
    <label for="data_publicacao">Data de Publicação</label>
    <input type="date" name="data_publicacao" id="data_publicacao" value="{{ old('data_publicacao') }}" required>

    <button type="submit">Cadastrar Anúncio</button>
</form>
