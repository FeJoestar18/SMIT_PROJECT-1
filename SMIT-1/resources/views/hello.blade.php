<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h1>Cadastrar Usuário</h1>

    <!-- Exibe mensagem de sucesso, caso exista -->
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <!-- Formulário de cadastro -->
    <form action="/hello" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nome" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="senha" placeholder="Senha" required><br>
        <input type="text" name="cpf" placeholder="CPF" required><br>
        <input type="text" name="telefone" placeholder="Telefone"><br>
        <input type="text" name="endereco" placeholder="Endereço"><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
