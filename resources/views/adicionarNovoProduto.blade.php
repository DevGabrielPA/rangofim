<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produto - Rango do Rei</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1d398;
            color: #333;
        }
        header {
            background-color: #ed1c24;
            padding: 20px;
        }
        header h1 {
            color: white;
        }
        .btn-back {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: transparent;
            border: none;
        }
        .btn-back img {
            height: 30px;
        }
        footer {
            background-color: #ed1c24;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        @media (max-width: 576px) {
            header h1 {
                font-size: 1.5rem;
            }
            .btn-back img {
                height: 20px;
            }
        }
    </style>
</head>
<body>

<!-- Botão para voltar -->
<a href="/controleEstoque" class="btn-back">
    <img src="https://cdn-icons-png.flaticon.com/512/93/93634.png" alt="Voltar" title="Voltar ao controle de estoque">
</a>

<!-- Header -->
<header class="text-center">
    <h1>Adicionar Produto - Rango do Rei</h1>
</header>

<!-- Formulário de Adicionar Produto -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header text-center" style="background-color: #ed1c24; color: white;">
                    <h3>Formulário de Cadastro de Produto</h3>
                </div>
                <div class="card-body">
                    <form action="/controleEstoque" method="post" enctype="multipart/form-data">
                        <!-- Nome do Produto -->
                        <div class="mb-3">
                            <label for="nomeProduto" class="form-label">Nome do Produto</label>
                            <input type="text" class="form-control" id="nomeProduto" name="nomeProduto" placeholder="Digite o nome do produto" required>
                        </div>
                        
                        <!-- Quantidade -->
                        <div class="mb-3">
                            <label for="quantidade" class="form-label">Quantidade</label>
                            <input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="Digite a quantidade disponível" min="0" required>
                        </div>
                        
                        <!-- Categoria -->
                        <div class="mb-3">
                            <label for="categoria" class="form-label">Categoria</label>
                            <select class="form-select" id="categoria" name="categoria" required>
                                <option value="" selected disabled>Selecione uma categoria</option>
                                <option value="Refeições">Refeições</option>
                                <option value="Lanches">Lanches</option>
                                <option value="Bebidas">Bebidas</option>
                                <option value="Sobremesas">Sobremesas</option>
                            </select>
                        </div>
                        
                        <!-- Preço -->
                        <div class="mb-3">
                            <label for="preco" class="form-label">Preço (R$)</label>
                            <input type="number" class="form-control" id="preco" name="preco" placeholder="Digite o preço do produto" min="0.01" step="0.01" required>
                        </div>
                        
                        <!-- Imagem do Produto -->
                        <div class="mb-3">
                            <label for="imagem" class="form-label">Imagem do Produto</label>
                            <input type="file" class="form-control" id="imagem" name="imagem" accept="image/*">
                        </div>
                        
                        <!-- Botão de Adicionar -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Adicionar Produto</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer>
    <p>&copy; 2024 Rango do Rei - Todos os direitos reservados.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
