@extends('_partials/body')
@section('conteudo')
    <!-- Seção Hero -->
    <div class="hero-section">
      <h1>Adote um Amigo Hoje!</h1>
      <p>Faça a diferença na vida de um animal abandonado. Dê a eles uma nova chance!</p>
    </div>

<!-- Cards de Adoção -->
<div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="https://adimax.com.br/wp-content/uploads/2022/05/cuidados-filhote-de-cachorro.jpg" class="card-img-top" alt="Cachorro para adoção">
            <div class="card-body">
              <h5 class="card-title">Thor</h5>
              <p class="card-text">Este cãozinho de 1 ano é super carinhoso e está esperando por um lar cheio de amor! Já está vacinado e castrado.</p>
              <a href="#" class="btn-adopt">Quero Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://png.pngtree.com/thumb_back/fw800/background/20210831/pngtree-cat-lying-on-the-ground-cat-blue-background-image_769640.jpg" class="card-img-top" alt="Gato para adoção">
            <div class="card-body">
              <h5 class="card-title">Mingau</h5>
              <p class="card-text">Essa gatinha de 8 meses é muito brincalhona e vai trazer alegria para sua casa. Adora carinho e brincar com bolinhas.</p>
              <a href="#" class="btn-adopt">Quero Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://www.petz.com.br/blog/wp-content/uploads/2024/09/coelho_03-scaled.jpg" class="card-img-top" alt="Coelho para adoção">
            <div class="card-body">
              <h5 class="card-title">Pipoca</h5>
              <p class="card-text">Este coelhinho de 6 meses é ideal para quem procura um animal tranquilo e carinhoso. Já está acostumado com humanos.</p>
              <a href="#" class="btn-adopt">Quero Adotar</a>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Segunda linha de cards -->
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1558236714-d1a6333fce68?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Cachorro para adoção">
            <div class="card-body">
              <h5 class="card-title">Luna</h5>
              <p class="card-text">Cadelinha idosa de 10 anos, muito tranquila e amorosa. Perfeita para quem quer um companheiro calmo.</p>
              <a href="#" class="btn-adopt">Quero Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Gato para adoção">
            <div class="card-body">
              <h5 class="card-title">Bolt</h5>
              <p class="card-text">Gatinho preto de 1 ano, muito energético e curioso. Adora explorar ambientes novos e brincar com arranhadores.</p>
              <a href="#" class="btn-adopt">Quero Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1452570053594-1b985d6ea890?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Cachorro para adoção">
            <div class="card-body">
              <h5 class="card-title">Rex</h5>
              <p class="card-text">Filhote de 4 meses, cheio de energia e pronto para receber treinamento. Ideal para famílias ativas.</p>
              <a href="#" class="btn-adopt">Quero Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
  <div class="card">
    <img src="https://static.mundoeducacao.uol.com.br/mundoeducacao/2021/03/1-animal.jpg" class="card-img-top" alt="Esquilo adulto para adoção">
    <div class="card-body">
      <h5 class="card-title">Esquilo Adulto</h5>
      <p class="card-text">Esquilo adulto disponível para adoção. Ele é ágil, curioso e perfeito para quem tem espaço e paciência para acompanhar sua energia.</p>
      <a href="#" class="btn-adopt">Quero Adotar</a>
    </div>
  </div>
</div>
<div class="col-md-4">
  <div class="card">
    <img src="https://www.racoesreis.com.br/wordpress/wp-content/uploads/gato-origem.jpg" class="card-img-top" alt="Gato Siaêmes pequeno para adotar">
    <div class="card-body">
      <h5 class="card-title">Gato Siamês</h5>
      <p class="card-text">Filhote de Siamês, muito carinhoso e sociável. Ideal para quem busca um companheiro leal e afetuoso.</p>
      <a href="#" class="btn-adopt">Quero Adotar</a>
    </div>
  </div>
</div>
<div class="col-md-4">
  <div class="card">
    <img src="https://s2-g1.glbimg.com/JdmLQ1EqaTZ825ZQ38u6jVlWwfI=/0x0:1281x743/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2020/E/w/VCP6bwQTW7W8RULyvwvw/mico.jpg" class="card-img-top" alt="Mico Leão Dourado para Adotar">
    <div class="card-body">
      <h5 class="card-title">Mico Leão Dourado</h5>
      <p class="card-text">O Mico Leão Dourado é uma espécie rara e encantadora. Ideal para quem possui um espaço adequado e deseja contribuir para a preservação dessa espécie.</p>
      <a href="#" class="btn-adopt">Quero Adotar</a>
    </div>
  </div>
</div>

      </div>
    </div>

    <!-- Seção de Informações -->
    <div class="container-fluid py-5" style="background-color: var(--light-gray);">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
              <h2 style="color: var(--primary);">Por que adotar?</h2>
              <p style="color: var(--darker-brown);">Adotar um animal é um ato de amor que transforma vidas. Você não só ganha um companheiro leal, mas também ajuda a reduzir o número de animais abandonados. Todos os nossos animais são vacinados, vermifugados e castrados antes da adoção.</p>
          </div>
          <div class="col-md-6">
              <h2 style="color: var(--primary);">Processo de Adoção</h2>
              <ol style="color: var(--darker-brown);">
                  <li>Escolha seu novo amigo</li>
                  <li>Preencha o formulário de interesse</li>
                  <li>Agendamos uma visita</li>
                  <li>Realizamos entrevista e análise do local</li>
                  <li>Assinatura do termo de adoção</li>
              </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Rodapé -->

@endsection