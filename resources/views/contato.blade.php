<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Rango do Rei</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f1d398; /* Cor de fundo semelhante ao tema do site */
        }
        .container {
            margin-top: 20px;
            padding: 20px;
            background-color: white; /* Fundo branco para a seção de contato */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            text-decoration: underline;
            color: #ed1c24; /* Cor do tema */
        }
        footer {
            background-color: #ed1c24;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        .btn-back {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: transparent;
            border: none;
        }
        .btn-back img {
            width: 30px;
            height: 30px;
        }
        .btn-send {
            margin-top: 20px;
            background-color: #dc3545; /* Cor vinho suave para os botões */
            color: white;
            border: none;
        }
        .btn-form-back {
            margin-top: 10px;
            background-color: #dc3545;
            color: white;
            border: none;
            display: block;
            text-align: center;
            width: 230px;
            height: 35px;
        }
        @media (max-width: 576px) {
            .container {
                padding: 15px;
            }
            .btn-back {
                top: 10px;
                left: 10px;
            }
            footer img {
                height: 50px;
            }
        }
    </style>
</head>
<body>

    <!-- Botão de voltar para a página principal no canto superior esquerdo -->
    <a href="/home" class="btn-back">
        <img src="https://cdn-icons-png.flaticon.com/512/93/93634.png" alt="Voltar" title="Voltar à página inicial">
    </a>

    <div class="container">
        <h1>Contato</h1>
        
        <p>É dono ou diretor de instituição de ensino e tem interesse em contar com nossos serviços da cantina moderna ou apenas das vending machines?</p>
        <p><strong>CONTATO@RANGODOREI.COM.BR</strong></p>
        
        <p>Tem interesse em abrir sua própria Rango do Rei?</p>
        <p><strong>PARCERIAS@RANGODOREI.COM.BR</strong></p>
        
        <p>Críticas, sugestões, interesses ou parcerias de marketing?</p>
        <p><strong>MARKETING@RANGODOREI.COM.BR</strong></p>
        
        <p>Se identifica com nossos ideais humanos e empresariais? Envie seu currículo!</p>
        <p><strong>RH@RANGODOREI.COM.BR</strong></p>
        
        <p>Deseja se tornar um fornecedor de nossas empresas?</p>
        <p><strong>COMPRAS@RANGODOREI.COM.BR</strong></p>
        
        <p>Tem interesse em orçar um buffet ou realizar eventos em uma de nossas unidades?</p>
        <p><strong>VENDAS@RANGODOREI.COM.BR</strong></p>

        <h2>Se preferir, você pode entrar em contato preenchendo o formulário abaixo:</h2>

        <form>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="tel" class="form-control" id="telefone" required>
            </div>
            <div class="mb-3">
                <label for="mensagem" class="form-label">Mensagem</label>
                <textarea class="form-control" id="mensagem" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-send">Enviar</button>

            <!-- Segundo botão de voltar dentro do formulário -->
            <a href="/home" class="btn btn-form-back">Voltar para a página inicial</a>
        </form>
    </div>

    <!-- Footer -->
    <footer>
        <img src="https://www.rangodorei.com.br/wp-content/themes/rangodorei/images/logo_header.png" alt="Rango do Rei" style="height: 60px; margin-bottom: 10px;">
        <p>&copy; 2024 Rango do Rei - Todos os direitos reservados.</p>
        <p>contato@rangodorei.com.br | (31) 99185-1690</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
