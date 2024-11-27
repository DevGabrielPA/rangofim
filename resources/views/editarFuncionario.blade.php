<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Funcionário - Rango do Rei</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="font-family: Arial, sans-serif; background-color: #f1d398; color: #333;">

<!-- Header simplificado -->
<header class="text-center" style="background-color: #ed1c24; padding: 20px;">
    <h1 style="color: white;">Editar Funcionário - Rango do Rei</h1>
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
            <h4 style="color: #ed1c24; font-weight: bold;">Editar Informações do Funcionário</h4>
            <p>Atualize as informações do funcionário abaixo:</p>

            <!-- Formulário de edição -->
            <form action="/infoFuncionarios" method="POST">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="João Silva" required>
                </div>
                <div class="mb-3">
                    <label for="posicao" class="form-label">Posição</label>
                    <input type="text" class="form-control" id="posicao" name="posicao" value="Gerente" required>
                </div>
                <div class="mb-3">
                    <label for="contato" class="form-label">Contato</label>
                    <input type="email" class="form-control" id="contato" name="contato" value="joao@rangodorei.com.br" required>
                </div>
                <input type="hidden" name="id" value="1">
                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                <a href="/infoFuncionarios" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
