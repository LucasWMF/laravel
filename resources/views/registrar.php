@extends('_partials/body')
@section('conteudo')
    <!-- Seção Hero -->
    <div class="register-hero">
      <h1>Junte-se a Nós!</h1>
      <p>Crie sua conta e comece sua jornada para adotar ou ajudar animais necessitados</p>
    </div>

    <!-- Formulário de Registro -->
    <div class="register-container">
      <h2>Criar Conta</h2>
      <form>
        <div class="form-row">
          <div class="form-col">
            <div class="form-group">
              <label for="firstName">Nome</label>
              <input type="text" class="form-control" id="firstName" placeholder="Digite seu nome" required>
            </div>
          </div>
          <div class="form-col">
            <div class="form-group">
              <label for="lastName">Sobrenome</label>
              <input type="text" class="form-control" id="lastName" placeholder="Digite seu sobrenome" required>
            </div>
          </div>
        </div>
        
        <div class="form-group">
          <label for="email">E-mail</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
        </div>
        
        <div class="form-row">
          <div class="form-col">
            <div class="form-group">
              <label for="password">Senha</label>
              <input type="password" class="form-control" id="password" placeholder="Crie uma senha" required>
            </div>
          </div>
          <div class="form-col">
            <div class="form-group">
              <label for="confirmPassword">Confirmar Senha</label>
              <input type="password" class="form-control" id="confirmPassword" placeholder="Repita a senha" required>
            </div>
          </div>
        </div>
        
        <div class="form-group">
          <label for="phone">Telefone</label>
          <input type="tel" class="form-control" id="phone" placeholder="Digite seu telefone">
        </div>
        
        <div class="form-group">
          <label for="address">Endereço</label>
          <input type="text" class="form-control" id="address" placeholder="Digite seu endereço">
        </div>
        
        <div class="form-group">
          <label for="userType">Você deseja:</label>
          <select class="form-control" id="userType">
            <option value="adopter">Adotar um animal</option>
            <option value="volunteer">Ser voluntário</option>
            <option value="both">Ambos</option>
          </select>
        </div>
        
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="terms" required>
          <label class="form-check-label" for="terms">Eu concordo com os Termos de Serviço e Política de Privacidade</label>
        </div>
        
        <button type="submit" class="btn-register">Criar Conta</button>
        
        <div class="terms-text">
          <p>Ao se registrar, você concorda com nossos <a href="#">Termos de Uso</a> e <a href="#">Política de Privacidade</a>.</p>
        </div>
        
        <div class="register-options">
          <p>Já tem uma conta? <a href="#">Faça login</a></p>
        </div>
      </form>
    </div>

@endsection