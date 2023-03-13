<x-main>
    @section('title', 'Candidatos')
    <div class="card">
        <div class="card-header">
            Informações Candidato
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-light table-hover align-middle">
                    <tbody>
                        <tr class="">
                            <th scope="row">Nome</th>
                            <td>{{ $candidato->nome }}</td>
                        </tr>
                        <tr class="">
                            <th scope="row">Habilidades</th>
                            <td>{{ implode(', ', $candidato->habilidades) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer text-muted">
            <div class="btn-group" id="container_button">
                <x-button.a class="btn btn-primary" type="button" href="{{ route('candidato.edit', $candidato->id) }}">
                    Editar</x-button.a>
                <form action="{{ route('candidato.delete', $candidato->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <x-button.button class="btn btn-danger" type="submit">Deletar</x-button.a>
                </form>
            </div>
        </div>
    </div>

    @if (count($vagas)>0)
    <div id="componentPanelRelatorio" class="panel-group">
        <div class="panel-heading">
            <h2>Vagas Compatíveis</h2>
        </div>
    </div>
    <div class="table-responsive-sm">
        <table class="table table-hover align-middle">
            <thead class="table-primary">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Vaga</th>
                    <th scope="col">Habilidades</th>
                </tr>
            </thead>
            <tbody  id="tabelaPesquisa">
                @foreach ($vagas as $vaga)
                <tr class="">
                    <th scope="row">{{ ($loop->index+1) }}</th>
                    <td><x-button.a href="{{ route('candidato.show', $vaga->id) }}" >{{ $vaga->nome }}</x-button.a></td>
                    <td>{{ implode(', ', $vaga->habilidades) }}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot class="table-primary">
                <td scope="row"></td>
                <td></td>
                <td>Total: {{ count($vagas) }}</td>
            </tfoot>
        </table>
    </div>
    @else
        <h4>Não há Vaga compatíveis com esse Candidato!</h4>
    @endif
</x-main>
