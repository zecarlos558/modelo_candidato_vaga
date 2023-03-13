<x-main>
    @section('title', 'Vagas')
    @section('head')
        <link rel="stylesheet" href="{{ asset('css/selectize.default.min.css') }}" referrerpolicy="no-referrer" />
        <script src="{{ asset('js/selectize.min.js') }}" referrerpolicy="no-referrer"></script>
    @endsection

    <form action="{{ route('vaga.store') }}" method="post" autocomplete="off">
        <div class="card">
            <div class="card-header">
                Cadastrar Vaga
            </div>
            <div class="card-body">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Nome</label>
                    <input type="text" class="form-control" value="" name="nome" id="nome"
                        aria-describedby="helpId" placeholder="Nome da Vaga">

                </div>

                <div class="control-group">
                    <label for="habilidades">Habilidades:</label>
                    <select required id='habilidades' value="" name="habilidades[]">
                        @foreach ($linguagens as $linguagem)
                            <option></option>
                            <option>{{ $linguagem->name }}</option>
                        @endforeach
                    </select>
                    <small>Requisita o mínimo de 3 habilidades</small>
                </div>

            </div>
            <div class="card-footer text-muted">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>
    </form>

    <script>
        $("#habilidades").selectize({
            plugins: ["restore_on_backspace", "clear_button", "remove_button"],
            delimiter: ",",
            persist: true,
            maxItems: null,
            create: function(input) {
                return {
                    value: input,
                    text: input,
                };
            },
            sortField: {
                field: 'text',
                direction: 'asc'
            }
        });
    </script>
</x-main>
