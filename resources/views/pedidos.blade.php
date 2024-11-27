<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Pedidos - Rango do Rei</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="font-family: Arial, sans-serif; background-color: #f1d398; color: #333;">

<!-- Header simplificado -->
<header class="text-center" style="background-color: #ed1c24; padding: 20px;">
    <h1 style="color: white;">Visualizar Pedidos - Rango do Rei</h1>
</header>

<div class="container mt-5">
    <div class="row">
        <!-- Coluna de Menu de Opções -->
        <div class="col-md-3">
            <h4 style="color: #ed1c24; font-weight: bold;">Menu</h4>
            <ul class="list-group">
                <li class="list-group-item"><a href="/controleEstoque">Controle de Estoque</a></li>
                <li class="list-group-item"><a href="/pedidos">Visualizar Pedidos</a></li>
                <li class="list-group-item"><a href="/infoFuncionarios">Informações de Funcionários</a></li>
            </ul>
        </div>

        <!-- Conteúdo Principal -->
        <div class="col-md-9">
            <h4 style="color: #ed1c24; font-weight: bold;">Lista de Pedidos</h4>
            <p>Veja os pedidos realizados pelos alunos:</p>

            <table class="table table-bordered table-striped">
                <thead style="background-color: #ed1c24; color: white;">
                    <tr>
                        <th>Número do Pedido</th>
                        <th>Data</th>
                        <th>Total</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Exemplo de pedido, substitua com dados do banco -->
                    <tr>
                        <td>12345</td>
                        <td>12/10/2024</td>
                        <td>R$ 50,00</td>
                        <td>Concluído</td>
                    </tr>
                    <tr>
                        <td>12346</td>
                        <td>12/10/2024</td>
                        <td>R$ 30,00</td>
                        <td>Concluído</td>
                    </tr>
                    <!-- Adicione mais pedidos conforme necessário -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
