<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Estoque - Rango do Rei</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="font-family: Arial, sans-serif; background-color: #f1d398; color: #333;">

<!-- Header simplificado -->
<header class="text-center" style="background-color: #ed1c24; padding: 20px;">
    <h1 style="color: white;">Controle de Estoque - Rango do Rei</h1>
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
            <h4 style="color: #ed1c24; font-weight: bold;">Produtos no Estoque</h4>
            <p>Controle de estoque de produtos disponíveis para venda:</p>
            
            <a href="/adicionarNovoProduto" class="btn btn-success mb-3">Adicionar Novo Produto</a>

            <table class="table table-bordered table-striped">
                <thead style="background-color: #ed1c24; color: white;">
                    <tr>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Categoria</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Exemplo de produto, substitua com dados do banco -->
                    <tr>
                        <td>Produto Exemplo 1</td>
                        <td>20</td>
                        <td>Bebidas</td>
                        <td>
                            <a href="/editarProduto" class="btn btn-primary btn-sm">Editar</a>
                            <a href="/controleEstoque" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este produto?');">Excluir</a>
                        </td>
                    </tr>
                    <!-- Adicione mais produtos conforme necessário -->
                </tbody>
            </table>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
