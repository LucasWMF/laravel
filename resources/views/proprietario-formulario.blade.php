@extends('layouts.app')
@section('content')

  <form action="{{ route('proprietario-store') }}" method="POST">
    <h2 class="mb-4">Cadastrar Proprietário</h2>
    @csrf

    {{-- Campo oculto para ID --}}
    <input type="hidden" name="id" value="{{ $proprietario->id ?? old('id') }}">

    <div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control" name="nome" id="nome" value="{{ $proprietario->nome ?? old('nome') }}">
    </div>

    <div class="mb-3">
    <label for="cpf" class="form-label">CPF</label>
    <input type="text" class="form-control" name="cpf" id="cpf" value="{{ $proprietario->cpf ?? old('cpf') }}">
    </div>

    <div class="mb-3">
    <label for="tel" class="form-label">Telefone</label>
    <input type="text" class="form-control" name="tel" id="tel" value="{{ $proprietario->tel ?? old('tel') }}">
    </div>

    <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="email" value="{{ $proprietario->email ?? old('email') }}">
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>

@endsection