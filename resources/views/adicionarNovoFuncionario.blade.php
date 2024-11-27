<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Funcionário - Rango do Rei</title>
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
            font-size: 1.8rem;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        footer {
            background-color: #ed1c24;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        @media (max-width: 768px) {
            header h1 {
                font-size: 1.5rem;
            }
            .card {
                margin: 0 10px;
            }
        }
        @media (max-width: 576px) {
            header h1 {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>

<!-- Header -->
<header class="text-center">
    <h1>Adicionar Funcionário - Rango do Rei</h1>
</header>

<!-- Formulário -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <div class="card">
                <div class="card-header text-center" style="background-color: #ed1c24; color: white;">
                    <h3>Formulário de Cadastro de Funcionário</h3>
                </div>
                <div class="card-body">
                    <form action="/infoFuncionarios" method="post">
                        <!-- Nome Completo -->
                        <div class="mb-3">
                            <label for="nomeFuncionario" class="form-label">Nome Completo</label>
                            <input type="text" class="form-control" id="nomeFuncionario" name="nomeFuncionario" placeholder="Digite o nome completo" required>
                        </div>

                        <!-- Posição -->
                        <div class="mb-3">
                            <label for="posicao" class="form-label">Posição</label>
                            <select class="form-select" id="posicao" name="posicao" required>
                                <option value="" selected disabled>Selecione a posição</option>
                                <option value="Gerente">Gerente</option>
                                <option value="Atendente">Atendente</option>
                                <option value="Auxiliar de Cozinha">Auxiliar de Cozinha</option>
                            </select>
                        </div>

                        <!-- Contato -->
                        <div class="mb-3">
                            <label for="contato" class="form-label">E-mail de Contato</label>
                            <input type="email" class="form-control" id="contato" name="contato" placeholder="exemplo@dominio.com" required>
                        </div>

                        <!-- Telefone -->
                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(XX) XXXXX-XXXX" required>
                        </div>

                        <!-- Senha -->
                        <div class="mb-3">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite uma senha" required>
                        </div>

                        <!-- Confirmar Senha -->
                        <div class="mb-3">
                            <label for="confirmarSenha" class="form-label">Confirmar Senha</label>
                            <input type="password" class="form-control" id="confirmarSenha" name="confirmarSenha" placeholder="Confirme a senha" required>
                        </div>

                        <!-- Botão de Adicionar -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Adicionar Funcionário</button>
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
