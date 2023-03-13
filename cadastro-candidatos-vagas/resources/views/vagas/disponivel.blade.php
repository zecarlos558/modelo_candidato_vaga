<x-main>
    @section('title', 'Vagas Disponíveis')
    @foreach ($vagas as $vaga)
        <div id="componentPanelRelatorio" class="panel-group">
            <div class="panel-heading">
                <h2>{{ $vaga->nome }}</h2>
                <h5>{{ implode(', ', $vaga->habilidades) }}</h5>
            </div>
        </div>
        @if (count($vaga->candidatos) > 0)
            <div class="table-responsive" id="tabela">
                <table
                    class="table table-hover table-borderless
                              table-primary align-middle">
                    <thead class="table-info">
                        <tr>
                            <th>#</th>
                            <th>Candidato</th>
                            <th>Habilidades</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($vaga->candidatos as $candidato)
                            <tr class="table-light">
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>{{ $candidato->nome }}</td>
                                <td>{{ implode(', ', $candidato->habilidades) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tr>
                        <td scope="row"></td>
                        <td></td>
                        <td style="font-weight: bold;">Total: {{ count($vaga->candidatos) }}</td>
                    </tr>
                </table>
            </div>
        @else
            <h5>Não há candidatos compatíveis com essa vaga</h5>
        @endif
    @endforeach
</x-main>
