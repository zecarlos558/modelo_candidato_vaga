<x-main>
    @section('title', 'Vagas')
    <div class="card" id="tabela">
        <div class="card-header">
            <div class="row justify-content-between">
                <div class="col">
                    Lista de Candidatos
                </div>
                <div class="col">
                    <x-center-search></x-center-search>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive-sm">
                <table class="table table-light table-hover align-middle">
                    <thead class="table-info">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Habilidades</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody id="tabelaPesquisa">
                        @foreach ($vagas as $vaga)
                            <tr class="">
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>
                                    <x-button.a href="{{ route('vaga.show', $vaga->id) }}">{{ $vaga->nome }}
                                    </x-button.a>
                                </td>
                                <td>{{ implode(', ', $vaga->habilidades) }}</td>
                                <td>
                                    <div class="btn-group" id="container_button">
                                        <x-button.a class="btn btn-primary" type="button"
                                            href="{{ route('vaga.edit', $vaga->id) }}">
                                            Editar</x-button.a>
                                        <form action="{{ route('vaga.delete', $vaga->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <x-button.button class="btn btn-danger" type="submit">Deletar</x-button.a>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-main>
