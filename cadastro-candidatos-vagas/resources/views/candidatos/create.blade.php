<x-main>
    @section('title', 'Candidatos')
    @section('head')
        <link rel="stylesheet" href="{{ asset('css/selectize.default.min.css') }}" referrerpolicy="no-referrer" />
        <script src="{{ asset('js/selectize.min.js') }}" referrerpolicy="no-referrer"></script>
        <script src="{{ asset('js/selectize.js') }}" referrerpolicy="no-referrer" defer></script>
    @endsection

    <form action="{{ route('candidato.store') }}" method="post" autocomplete="off">
        <div class="card">
            <div class="card-header">
                Cadastrar Candidato
            </div>
            <div class="card-body">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Nome</label>
                    <input type="text" class="form-control" value="" name="nome" id="nome"
                        aria-describedby="helpId" placeholder="Nome do Candidato">

                </div>

                <div class="control-group">
                    <label for="habilidades">Habilidades:</label>
                    <select required id='habilidades' value="" name="habilidades[]">
                        @foreach ($linguagens as $linguagem)
                            <option></option>
                            <option>{{ $linguagem->name }}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="card-footer text-muted">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
    </form>
</x-main>
