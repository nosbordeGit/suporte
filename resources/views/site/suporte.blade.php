<x-layout>
    <x-slot name="title">
        Home | Suporte
    </x-slot>

    @section('container')
    <h1 class="text-center mb-4">Lista de Chamados</h1>

    <table class="table table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Título</th>
          <th>Descrição</th>
          <th>Status</th>
          <th>Criado em</th>
          <th>Ação</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($chamados as $chamado)
            <tr>
                <td>{{ $chamado->id }}</td>
                <td>{{ $chamado->titulo }}</td>
                <td>{{ $chamado->email }}</td>
                <!--Inserir este if para tornar o status dinamico-->
                @if ($chamado->status === 'Aberto')
                    <td><span class="badge bg-success text-dark">{{ $chamado->status }}</span></td>
                @elseif ($chamado->status === 'Em atendimento')
                    <td><span class="badge bg-warning text-dark">{{ $chamado->status }}</span></td>
                @elseif ($chamado->status === 'Fechado')
                    <td><span class="badge bg-danger text-dark">{{ $chamado->status }}</span></td>
                @endif
                <td>{{ $chamado->created_at }}</td>
                <td><!--Adiciona botão e passa o ID para a tela de edição -->
                    <a href="{{ route('suporte.edit', $chamado->id) }}" class="btn btn-sm btn-primary">Alterar</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">
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
