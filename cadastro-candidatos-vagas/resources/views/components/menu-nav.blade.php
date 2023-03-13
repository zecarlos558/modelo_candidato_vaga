<div>
    <nav class="navbar navbar-expand-xl py-0 bg-light navbar-light" id="navbvar">
        <div class="container-fluid" id="navbvarMenu">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="">
                <x-logo>70</x-logo>
            </a>
            <!-- Botão de Expansão -->
            <button class="navbar-toggler" id="navbarTogller" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasMenuPrincipal" aria-controls="offcanvasMenuPrincipal">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Início do Canvas -->
            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasMenuPrincipal"
                aria-labelledby="offcanvasMenuPrincipalLabel">
                <div class="offcanvas-header">
                    <h2 class="offcanvas-title" id="offcanvasMenuPrincipalLabel">{{ config('app.name', 'Laravel') }}
                    </h2>
                    <button type="button" class="btn-close text-reset" id="botaoCloseMenuCanvas"
                        data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="d-lg-none">
                        <h5>Menu</h5>
                        <input type="text" id="pesquisaMenu" onkeyup="FuncaoPesquisaMenu()"
                            placeholder="Pesquisa menu..">
                    </div>
                    <ul class="navbar-nav nav-left" id="MenuOpcao">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ route('home') }}" role="button">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown">Candidatos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('candidato.index') }}">Listar</a></li>
                                <li><a class="dropdown-item" href="{{ route('candidato.create') }}">Cadastrar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown">Vagas
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('vaga.index') }}">Listar</a></li>
                                <li><a class="dropdown-item" href="{{ route('vaga.create') }}">Cadastrar</a></li>
                                <li><a class="dropdown-item" href="{{ route('vaga.disponivel') }}">Disponíveis</a></li>
                            </ul>
                        </li>
                        <x-card-session>d-xl-none</x-card-session>
                    </ul>
                </div>
            </div>
            <x-card-session> d-none d-xl-block</x-card-session>
        </div>
    </nav>
</div>
