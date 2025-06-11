<form action="{{ route('proprietario-store') }}" method="POST">
    @csrf

    <!-- {{-- Essa linha irá recuperar o ID e deixar invisível --}} -->
    <input type="hidden" name="id" value="{{ $veiculo->id ?? old('id') }}">

    <label for="nome">Nome do Proprietário</label>
    <input type="text" name="nome" id="nome" value="{{ old('nome') }}" required>

    <label for="cpf">CPF do Proprietário</label>
    <input type="text" name="cpf" id="cpf" value="{{ old('cpf') }}" required>

    <label for="telefone">Telefone do Proprietário</label>
    <input type="text" name="telefone" id="telefone" value="{{ old('telefone') }}" required>

    <label for="email">Email do Proprietário</label>
    <input type="email" name="email" id="email" value="{{ old('email') }}" required>

    <button type="submit">Cadastrar</button>
</form>
