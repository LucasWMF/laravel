@extends('_partials/body')
@section('conteudo')

    <!-- Seção Hero -->
    <div class="login-hero">
      <h1>Bem-vindo de Volta!</h1>
      <p>Acesse sua conta para continuar seu processo de adoção ou cadastre novos animais</p>
    </div>

    <!-- Formulário de Login -->
    <div class="login-container">
      <h2>Login</h2>
      <form>
        <div class="form-group">
          <label for="email">E-mail</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
        </div>
        
        <div class="form-group">
          <label for="password">Senha</label>
          <input type="password" class="form-control" id="password" placeholder="Digite sua senha" required>
        </div>
        
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="remember">
          <label class="form-check-label" for="remember">Lembrar de mim</label>
        </div>
        
        <button type="submit" class="btn-login">Entrar</button>
        
        <div class="login-options">
          <a href="#">Esqueci minha senha</a>
          <a href="#">Criar nova conta</a>
        </div>
      </form>
    </div>

@endsection