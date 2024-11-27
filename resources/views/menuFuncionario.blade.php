<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Funcionários - Rango do Rei</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="font-family: Arial, sans-serif; background-color: #f1d398; color: #333;">

<header class="text-center" style="background-color: #ed1c24; padding: 20px;">
    <h1 style="color: white;">Menu de Funcionário - Rango do Rei</h1>
</header>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <h4 style="color: #ed1c24; font-weight: bold;">Menu</h4>
            <ul class="list-group">
                <li class="list-group-item"><a href="/controleEstoque">Controle de Estoque</a></li>
                <li class="list-group-item"><a href="/pedidos">Visualizar Pedidos</a></li>
                <li class="list-group-item"><a href="/infoFuncionarios">Informações de Funcionários</a></li>
                <form id="logout-form" action="{{ route('logoutFuncionario') }}" method="POST" style="display: none;">
    @csrf
</form>
<li class="list-group-item">
    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
</li>
            </ul>
        </div>

        <div class="col-md-9">
            <h4 style="color: #ed1c24; font-weight: bold;">Bem-vindo ao Menu de Funcionários</h4>
            <p>Escolha uma das opções no menu ao lado para acessar a área desejada.</p>
            <p>O menu à esquerda irá ajudá-lo a navegar entre as páginas de controle de estoque, pedidos e informações dos funcionários.</p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>