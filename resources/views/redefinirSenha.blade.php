<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Redefinição de Senha - Rango do Rei</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f1d398;
            font-family: Arial, sans-serif;
        }
        .reset-container {
            max-width: 400px;
            margin: 60px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .btn-custom {
            background-color: #ed1c24;
            color: white;
        }
        .btn-custom:hover {
            background-color: #d4171d;
        }
        .form-label {
            font-weight: bold;
        }
        .logo {
            display: block;
            margin: 0 auto 20px;
            height: 100px;
        }
        footer {
            background-color: #ed1c24;
            color: white;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
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
        @media (max-width: 576px) {
            .reset-container {
                margin: 30px auto;
                padding: 20px;
            }
            .logo {
                height: 80px;
            }
        }
        @media (min-width: 1200px) {
            .reset-container {
                max-width: 500px;
            }
        }
    </style>
</head>
<body>

    <!-- Botão de voltar -->
    <a href="/login" class="btn-back">
        <img src="https://cdn-icons-png.flaticon.com/512/93/93634.png" alt="Voltar" title="Voltar à página de login">
    </a>

    <!-- Redefinição de Senha Formulário -->
    <div class="reset-container">
        <img src="https://www.rangodorei.com.br/wp-content/themes/rangodorei/images/logo_header.png" alt="Rango do Rei" class="logo">
        <h3 class="text-center mb-4" style="color: #ed1c24;">Redefinição de Senha</h3>
        
        <!-- Formulário -->
        <form>
            <!-- E-mail -->
            <div class="mb-3">
                <label for="email" class="form-label">Endereço de E-mail</label>
                <input type="email" class="form-control" id="email" placeholder="Seu e-mail" required>
            </div>
            <!-- Nova Senha -->
            <div class="mb-3">
                <label for="newPassword" class="form-label">Nova Senha</label>
                <input type="password" class="form-control" id="newPassword" placeholder="Digite sua nova senha" required>
            </div>
            <!-- Confirmar Nova Senha -->
            <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirmar Nova Senha</label>
                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirme sua nova senha" required>
            </div>
            <!-- Botão de redefinir -->
            <div class="d-grid mb-3">
                <button type="submit"class="btn btn-danger btn-sm" onclick="return confirm('senha redefinida com sucesso');">Redefinir Senha</button>
            </div>
        </form>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Rango do Rei - Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
