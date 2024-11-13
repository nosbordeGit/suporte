<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Abertura de chamado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <x-nav></x-nav>
        <br>
        <!--Alteração do formulario para enviar os dados corretos para o controller update Aula 13/11-->
        <form action="{{ route('suporte.update', $chamado->id) }}" method="POST">
            @csrf
            @method('PUT') <!--Implementando o metodo PUT Aula 13/11-->
            <div class="mb-3">
                      <!-- Alerta de boas-vindas -->
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Bem-vindo, {{ Auth::user()->name }}!</strong> Utilize o formulário abaixo para abrir um novo chamado.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="mb-3">
                    <label for="descricao" class="form-label">Problema</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" required value="{{ $chamado->titulo }}">
                  </div>
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" readonly >
              </div>
              <div class="mb-3">
                <label for="descricao" class="form-label">Descrição do Problema</label>
                <textarea class="form-control" id="descricao" name="descricao" rows="6">{{ $chamado->descricao }}</textarea>
              </div>
              <!--Inserindo o status ao  Aula 13/11-->
              <div class="mb-3 col-md-4">
                <label for="status" class="form-label">Status do Chamado</label>
                <select class="form-select" id="status" name="status" required>
                    <option value="Aberto" {{ $chamado->status == 'Aberto' ? 'selected' : '' }}>Aberto</option>
                    <option value="Em Atendimento" {{ $chamado->status == 'Em Atendimento' ? 'selected' : '' }}>Em Atendimento</option>
                    <option value="fechado" {{ $chamado->status == 'Fechado' ? 'selected' : '' }}>Fechado</option>
                </select>
            </div>
              <div class="col-12">
                <!--Inserir Botão de voltar-->
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{ route('suporte.index') }}" class="btn btn-warning">Voltar</a>
              </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>


