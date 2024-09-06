<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Celke</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Cor de fundo clara para contraste */
        }
        .container {
            background-color: #ffffff; /* Fundo branco para o container */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        h2 {
            color: #343a40; /* Cor escura para o título */
        }
        .btn-link {
            color: #007bff;
            font-size: 1.1rem;
            text-decoration: none;
        }
        .btn-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Listar as Contas</h2>
        <div class="mb-3">
            <a href="{{ route('conta.create') }}" class="btn btn-primary">Cadastrar</a>
        </div>
        <div class="mb-3">
            <a href="{{ route('conta.show') }}" class="btn btn-info">Visualizar</a>
        </div>
        <div class="mb-3">
            <a href="{{ route('conta.edit') }}" class="btn btn-warning">Editar</a>
        </div>
