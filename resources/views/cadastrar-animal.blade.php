@extends('_partials/body')
@section('conteudo')
<style>
/* ======================
   Variáveis
   ====================== */
:root {
    --primary: #0A5573;
    --secondary: #594302;
    --dark-brown: #402A01;
    --darker-brown: #261501;
    --light-gray: #BFBCBA;
}

/* ======================
   Estilos Globais
   ====================== */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f8f9fa;
    color: var(--darker-brown);
}

/* ======================
   Hero Section
   ====================== */
.register-pet-hero {
    background: linear-gradient(rgba(10, 85, 115, 0.8), rgba(10, 85, 115, 0.8)), 
                url('https://images.unsplash.com/photo-1450778869180-41d0601e046e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
    background-size: cover;
    background-position: center;
    color: white;
    text-align: center;
    padding: 80px 20px;
    margin-bottom: 40px;
}

.register-pet-hero h1 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 20px;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.register-pet-hero p {
    font-size: 1.2rem;
    max-width: 800px;
    margin: 0 auto;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
}

/* ======================
   Formulário de Cadastro
   ====================== */
.register-pet-container {
    max-width: 800px;
    margin: 0 auto 50px;
    padding: 30px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.register-pet-container h2 {
    color: var(--primary);
    text-align: center;
    margin-bottom: 30px;
    font-weight: 700;
}

.form-group {
    margin-bottom: 20px;
}

.form-row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}

.form-col {
    flex: 0 0 50%;
    padding-right: 15px;
    padding-left: 15px;
    max-width: 50%;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    color: var(--dark-brown);
    font-weight: 600;
}

.form-control {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid var(--light-gray);
    border-radius: 5px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

.form-control:focus {
    border-color: var(--primary);
    outline: none;
    box-shadow: 0 0 0 3px rgba(10, 85, 115, 0.2);
}

textarea.form-control {
    min-height: 120px;
    resize: vertical;
}

.form-radio-group {
    display: flex;
    gap: 20px;
    margin-bottom: 15px;
}

.form-radio-option {
    display: flex;
    align-items: center;
    gap: 8px;
}

.file-upload {
    border: 2px dashed var(--light-gray);
    border-radius: 5px;
    padding: 20px;
    text-align: center;
    cursor: pointer;
    transition: all 0.3s ease;
}

.file-upload:hover {
    border-color: var(--primary);
}

.file-upload input[type="file"] {
    display: none;
}

.file-upload-label {
    display: block;
    cursor: pointer;
}

.file-upload-preview {
    max-width: 200px;
    max-height: 200px;
    margin-top: 15px;
    display: none;
}

.btn-register-pet {
    display: block;
    width: 100%;
    background-color: var(--secondary);
    color: white;
    padding: 12px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    border: none;
    font-size: 1rem;
    cursor: pointer;
    margin-top: 20px;
}

.btn-register-pet:hover {
    background-color: var(--dark-brown);
    transform: translateY(-2px);
}

/* ======================
   Footer
   ====================== */
footer {
    background-color: var(--primary);
    color: white;
    text-align: center;
    padding: 20px 0;
    margin-top: 50px;
}

footer p {
    margin: 0;
}

/* ======================
   Responsividade
   ====================== */
@media (max-width: 768px) {
    .register-pet-hero {
        padding: 60px 20px;
    }
    
    .register-pet-hero h1 {
        font-size: 2rem;
    }
    
    .register-pet-container {
        padding: 20px;
        margin: 0 15px 40px;
    }
    
    .form-col {
        flex: 0 0 100%;
        max-width: 100%;
    }
    
    .form-radio-group {
        flex-direction: column;
        gap: 10px;
    }
}
</style>

    <!-- Seção Hero -->
    <div class="register-pet-hero">
      <h1>Cadastre um Animal para Adoção</h1>
      <p>Ajude-nos a encontrar um lar amoroso para animais necessitados</p>
    </div>

    <!-- Formulário de Cadastro -->
    <div class="register-pet-container">
      <h2>Informações do Animal</h2>
      <form id="pet-registration-form">
        <div class="form-row">
          <div class="form-col">
            <div class="form-group">
              <label for="pet-name">Nome do Animal</label>
              <input type="text" class="form-control" id="pet-name" placeholder="Digite o nome do animal" required>
            </div>
          </div>
          <div class="form-col">
            <div class="form-group">
              <label for="pet-type">Espécie</label>
              <select class="form-control" id="pet-type" required>
                <option value="">Selecione</option>
                <option value="dog">Cachorro</option>
                <option value="cat">Gato</option>
                <option value="bird">Pássaro</option>
                <option value="other">Outro</option>
              </select>
            </div>
          </div>
        </div>
        
        <div class="form-row">
          <div class="form-col">
            <div class="form-group">
              <label for="pet-breed">Raça</label>
              <input type="text" class="form-control" id="pet-breed" placeholder="Digite a raça do animal">
            </div>
          </div>
          <div class="form-col">
            <div class="form-group">
              <label for="pet-age">Idade (aproximada)</label>
              <input type="text" class="form-control" id="pet-age" placeholder="Ex: 2 anos">
            </div>
          </div>
        </div>
        
        <div class="form-group">
          <label>Sexo</label>
          <div class="form-radio-group">
            <div class="form-radio-option">
              <input type="radio" id="pet-sex-male" name="pet-sex" value="male" required>
              <label for="pet-sex-male">Macho</label>
            </div>
            <div class="form-radio-option">
              <input type="radio" id="pet-sex-female" name="pet-sex" value="female">
              <label for="pet-sex-female">Fêmea</label>
            </div>
            <div class="form-radio-option">
              <input type="radio" id="pet-sex-unknown" name="pet-sex" value="unknown">
              <label for="pet-sex-unknown">Não sei</label>
            </div>
          </div>
        </div>
        
        <div class="form-group">
          <label for="pet-size">Porte</label>
          <select class="form-control" id="pet-size" required>
            <option value="">Selecione</option>
            <option value="small">Pequeno</option>
            <option value="medium">Médio</option>
            <option value="large">Grande</option>
          </select>
        </div>
        
        <div class="form-group">
          <label for="pet-description">Descrição</label>
          <textarea class="form-control" id="pet-description" placeholder="Descreva o animal (temperamento, histórico, necessidades especiais, etc.)" required></textarea>
        </div>
        
        <div class="form-group">
          <label for="pet-vaccinated">Vacinação</label>
          <select class="form-control" id="pet-vaccinated" required>
            <option value="">Selecione</option>
            <option value="yes">Vacinado</option>
            <option value="no">Não vacinado</option>
            <option value="partial">Parcialmente vacinado</option>
            <option value="unknown">Não sei</option>
          </select>
        </div>
        
        <div class="form-group">
          <label for="pet-castrated">Castrado</label>
          <select class="form-control" id="pet-castrated" required>
            <option value="">Selecione</option>
            <option value="yes">Sim</option>
            <option value="no">Não</option>
            <option value="unknown">Não sei</option>
          </select>
        </div>
        
        <div class="form-group">
          <label>Fotos do Animal</label>
          <div class="file-upload" id="file-upload-area">
            <label for="pet-photos" class="file-upload-label">
              <i class="fas fa-camera" style="font-size: 24px; margin-bottom: 10px;"></i>
              <p>Clique para adicionar fotos ou arraste aqui</p>
              <p class="text-muted">(Máximo 5 fotos)</p>
            </label>
            <input type="file" id="pet-photos" accept="image/*" multiple>
            <div class="file-upload-preview" id="file-upload-preview"></div>
          </div>
        </div>
        
        <button type="submit" class="btn-register-pet">Cadastrar Animal</button>
      </form>
    </div>

    <!-- <script>
    // Script para visualização das fotos selecionadas
    document.getElementById('pet-photos').addEventListener('change', function(e) {
        const preview = document.getElementById('file-upload-preview');
        preview.innerHTML = '';
        preview.style.display = 'block';
        
        const files = e.target.files;
        for (let i = 0; i < Math.min(files.length, 5); i++) {
            const reader = new FileReader();
            reader.onload = function(event) {
                const img = document.createElement('img');
                img.src = event.target.result;
                img.style.maxWidth = '100px';
                img.style.maxHeight = '100px';
                img.style.margin = '5px';
                preview.appendChild(img);
            }
            reader.readAsDataURL(files[i]);
        }
    });
    </script> -->

@endsection