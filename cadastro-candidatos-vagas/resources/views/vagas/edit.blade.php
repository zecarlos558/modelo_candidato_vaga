<x-main>
    @section('title', 'Vagas')
    @section('head')
        <link rel="stylesheet" href="{{ asset('css/selectize.default.min.css') }}" referrerpolicy="no-referrer" />
        <script src="{{ asset('js/selectize.min.js') }}" referrerpolicy="no-referrer"></script>
    @endsection

    <form action="{{ route('vaga.update', $vaga->id) }}" method="post" autocomplete="off">
        <div class="card">
            <div class="card-header">
                Editar Vagas
            </div>
            <div class="card-body">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Nome</label>
                    <input type="text" class="form-control" value="{{ $vaga->nome }}" name="nome" id="nome"
                        aria-describedby="helpId" placeholder="Nome da Vaga">

                </div>

                <div class="control-group">
                    <label for="habilidades">Habilidades:</label>
                    <select type="text" required multiple id='habilidades'
                        value="{{ implode(',', $vaga->habilidades) }}" name="habilidades[]">
                        <option></option>
                        @foreach ($linguagens as $linguagem)
                            @if (in_array($linguagem->name, $vaga->habilidades))
                                <option selected='true'>{{ $linguagem->name }}</option>
                            @else
                                <option>{{ $linguagem->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="card-footer text-muted">
                <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </div>
    </form>

    <script>
        $("#habilidades").selectize({
            plugins: ["restore_on_backspace", "clear_button", "remove_button"],
            delimiter: ",",
            persist: false,
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
