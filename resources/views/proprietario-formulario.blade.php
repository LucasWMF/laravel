<form action="{{ route('proprietario-store') }}" method="POST">
    @csrf

    <!-- {{-- Essa linha irá recuperar o ID e deixar invisível --}} -->
    <input type="hidden" name="id" value="{{ $proprietario->id ?? old('id') }}">
    
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" value="{{ $proprietario-> nome ?? old('nome') }}">

    <label for="cpf">CPF</label>
    <input type="text" name="cpf" id="cpf" value="{{ $proprietario-> cpf ?? old('cpf') }}">

    <label for="tel">Telefone</label>
    <input type="text" name="tel" id="tel" value="{{ $proprietario-> tel ?? old('tel') }}">

    <label for="email">Email</label>
    <input type="text" name="email" id="email" value="{{ $proprietario-> email ?? old('email') }}">

    <button type="submit">Cadastrar</button>
</form>