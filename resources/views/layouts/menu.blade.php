<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <!-- Nome da Página Atual -->
        <a class="navbar-brand" href="{{ route('home') }}">
            {{ $pageTitle ?? 'Sistema' }}
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">

            <ul class="navbar-nav ms-auto">

                <!-- Dropdown Cadastrar -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="cadastrarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Cadastrar
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cadastrarDropdown">
                        <li><a class="dropdown-item" href="{{ route('proprietario-formulario') }}">Proprietário</a></li>
                        <li><a class="dropdown-item" href="{{ route('veiculo-formulario') }}">Veículo</a></li>
                        <li><a class="dropdown-item" href="{{ route('anuncio-formulario') }}">Anúncio</a></li>
                    </ul>
                </li>

                <!-- Dropdown Listar -->
                <li class="nav-item dropdown ms-3">
                    <a class="nav-link dropdown-toggle" href="#" id="listarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Listar
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="listarDropdown">
                        <li><a class="dropdown-item" href="{{ route('proprietario-listar') }}">Proprietários</a></li>
                        <li><a class="dropdown-item" href="{{ route('veiculo-listar') }}">Veículos</a></li>
                        <li><a class="dropdown-item" href="{{ route('anuncio-listar') }}">Anúncios</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>