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
        </tr>
      </thead>
      <tbody>
        <!-- Exemplo de registros para teste -->
        @forelse ($chamados as $chamado)
            <tr>
                <td>{{$chamado->id  }}</td>
                <td>{{ $chamado->titulo }}</td>
                <td>{{ $chamado->email }}</td>
                <td><span class="badge bg-success text-dark">Aberto</span></td>
                <td>{{ $chamado->created_at }}</td>
            </tr>
        @empty
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Nenhum chamado registrado!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endforelse
      </tbody>
    </table>

    <!-- Botão para adicionar novos registros -->
    <div class="text-center mt-4">
      <a href="/chamado" class="btn btn-primary">Novo Chamado</a>
    </div>
  </div>
    @endsection
</x-layout>
