<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title }}</title>

  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet">
</head>
<body>
  <div class="container mt-5">

    <x-nav></x-nav>

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
        <tr>
          <td>1</td>
          <td>Erro de Login</td>
          <td>Usuário não consegue fazer login no sistema.</td>
          <td><span class="badge bg-warning text-dark">Aberto</span></td>
          <td>2024-10-09</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Falha no Banco de Dados</td>
          <td>Banco de dados não responde.</td>
          <td><span class="badge bg-danger">Pendente</span></td>
          <td>2024-10-08</td>
        </tr>
      </tbody>
    </table>

    <!-- Botão para adicionar novos registros -->
    <div class="text-center mt-4">
      <a href="/chamado" class="btn btn-primary">Novo Chamado</a>
    </div>
  </div>

  <!-- Bootstrap JS (opcional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
