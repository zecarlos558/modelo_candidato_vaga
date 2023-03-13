<x-main>
    @section('title', 'Vagas')
    <div class="card">
        <div class="card-header">
            Informações Vaga
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-light table-hover align-middle">
                    <tbody>
                        <tr class="">
                            <th scope="row">Nome</th>
                            <td>{{ $vaga->nome }}</td>
                        </tr>
                        <tr class="">
                            <th scope="row">Habilidades</th>
                            <td>{{ implode(', ', $vaga->habilidades) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer text-muted">
            <div class="btn-group" id="container_button">
                <x-button.a class="btn btn-primary" type="button" href="{{ route('vaga.edit', $vaga->id) }}">
                    Editar</x-button.a>
                <form action="{{ route('vaga.delete', $vaga->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <x-button.button class="btn btn-danger" type="submit">Deletar</x-button.a>
                </form>
            </div>
        </div>
    </div>

    @if (count($candidatos)>0)
    <div id="componentPanelRelatorio" class="panel-group">
        <div class="panel-heading">
            <h2>Candidatos Compatíveis</h2>
        </div>
    </div>
    <div class="table-responsive-sm">
        <table class="table table-hover align-middle">
            <thead class="table-primary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Candidato</th>
                    <th scope="col">Habilidades</th>
                </tr>
            </thead>
            <tbody  id="tabelaPesquisa">
                @foreach ($candidatos as $candidato)
                <tr class="">
                    <th scope="row">{{ ($loop->index+1) }}</th>
                    <td><x-button.a href="{{ route('candidato.show', $candidato->id) }}" >{{ $candidato->nome }}</x-button.a></td>
                    <td>{{ implode(', ', $candidato->habilidades) }}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot class="table-primary">
                <td scope="row"></td>
                <td></td>
                <td>Total: {{ count($candidatos) }}</td>
            </tfoot>
        </table>
    </div>
    @else
        <h4>Não há Candidatos compatíveis com essa vaga!</h4>
    @endif
</x-main>
