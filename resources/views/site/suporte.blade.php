<x-layout>
    <x-slot name="title">
        Suporte
    </x-slot>

    @section('container')
    <h1 class="text-center mb-4">Lista de Chamados</h1>

    <table class="table table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th>Título</th>
          <th>Descrição</th>
          <th>Status</th>
          <th>Atendimento</th>
          <th>Ação</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($chamados as $chamado)
            <tr>
                <td>{{ $chamado->titulo }}</td>
                <td>{{ $chamado->descricao }}</td>
                <!--Inserir este if para tornar o status dinamico-->
                <td>
                    @if ($chamado->status === 'Aberto')
                        <span class="badge bg-success text-dark">{{ $chamado->status }}</span>
                    @elseif ($chamado->status === 'Em atendimento')
                        <span class="badge bg-warning text-dark">{{ $chamado->status }}</span>
                    @elseif ($chamado->status === 'Fechado')
                        <span class="badge bg-danger text-dark">{{ $chamado->status }}</span>
                    @else
                        <span class="badge bg-secondary text-dark">{{ $chamado->status }}</span> <!-- Exibe uma cor padrão -->
                    @endif
                </td>
                <td>{{ $chamado->atendimento }}</td>
                <td><!--Adiciona botão e passa o ID para a tela de edição -->
                    <a href="{{ route('suporte.edit', $chamado->id) }}" class="btn btn-sm btn-primary">Alterar</a>
                    <a href="{{ route('suporte.edit', $chamado->id) }}" class="btn btn-sm btn-danger">Deletar</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">
                    <div class="alert alert-warning text-center">
                        Nenhum chamado registrado!
                    </div>
                </td>
            </tr>
        @endforelse
      </tbody>
    </table>

    <div class="text-center mt-4">
        <a href="/chamado" class="btn btn-primary">Novo Chamado</a>
    </div>
    @endsection
</x-layout>
