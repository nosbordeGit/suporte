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
        <form action="{{ route('suporte.chamadoSave') }}" method="POST">
            @csrf
            <div class="mb-3">
                      <!-- Alerta de boas-vindas -->
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Bem-vindo, {{ Auth::user()->name }}!</strong> Utilize o formulário abaixo para abrir um novo chamado.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="mb-3">
                    <label for="descricao" class="form-label">Problema</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" required>
                  </div>
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" readonly >
              </div>
              <div class="mb-3">
                <label for="descricao" class="form-label">Descrição do Problema</label>
                <textarea class="form-control" id="descricao" name="descricao" rows="6" placeholder="Descreva o problema com detalhes..." requiredphp></textarea>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
              </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

