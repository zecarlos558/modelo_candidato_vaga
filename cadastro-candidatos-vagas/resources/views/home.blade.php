<x-main>
    @section('title', 'HOME')
    @section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    @endsection
    <div class="container" >
        <div class="container px-sm-5" >
            <div class="p-sm-1 text-center" id="panel-home">
                <div class="m-4 m-sm-4">
                    <h2 class="fw-bold">Bem vindo!</h2>
                    <h4 class="fw-bold">{{auth()->user()->name}}</h4>
                     <a class="btn" href="{{ route('dashboard') }}"><i class="bi bi-person-vcard">Painel</i> </a>
                </div>
            </div>
        </div>
        <!-- Page Content-->
        <section class="pt-4">
            <div class="container-fluid px-lg-5">
                <h2 class="pb-2 border-bottom">Candidatos</h2>
                <!-- Page Features-->
                <div class="row gx-lg-5">
                    <div class="col">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <a class="feature-icon bg-gradient rounded-3 mb-4 mt-n4" href="{{ route('candidato.index') }}"><i class="bi bi-list"></i></a>
                                <h2 class="fs-4 fw-bold">Listar</h2>
                                <p class="mb-0">Página para exibir Candidatos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <a class="feature-icon bg-gradient rounded-3 mb-4 mt-n4" href="{{ route('candidato.create') }}"><i class="bi bi-plus-circle"></i></a>
                                <h2 class="fs-4 fw-bold">Cadastrar</h2>
                                <p class="mb-0">Página para cadastrar Candidatos</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid px-lg-5">
                <h2 class="pb-2 border-bottom">Vagas</h2>
                <!-- Page Features-->
                <div class="row gx-lg-5">
                    <div class="col">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <a class="feature-icon bg-gradient rounded-3 mb-4 mt-n4" href="{{ route('vaga.index') }}"><i class="bi bi-list"></i></a>
                                <h2 class="fs-4 fw-bold">Listar</h2>
                                <p class="mb-0">Função para listar as Vagas</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <a class="feature-icon bg-gradient rounded-3 mb-4 mt-n4" href="{{ route('vaga.create') }}"><i class="bi bi-plus-circle"></i></a>
                                <h2 class="fs-4 fw-bold">Cadastrar</h2>
                                <p class="mb-0">Função para cadastro de Vagas</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <a class="feature-icon bg-gradient rounded-3 mb-4 mt-n4" href="{{ route('vaga.disponivel') }}"><i class="bi bi-clipboard-data"></i></a>
                                <h2 class="fs-4 fw-bold">Disponíveis</h2>
                                <p class="mb-0">Função para consulta de Vagas Disponíveis</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
</x-main>
