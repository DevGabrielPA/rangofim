<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Rango do Rei</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

</head>
<body style="font-family: Arial, sans-serif;">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #ed1c24; padding: 10px 30px;">
            <!-- Logo reposicionada à esquerda e maior -->
            <a class="navbar-brand" href="#">
                <img src="https://www.rangodorei.com.br/wp-content/themes/rangodorei/images/logo_header.png" alt="Logo" style="height: 90px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <!-- Aumentando a visibilidade dos links -->
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/login" style="font-size: 18px; font-weight: bold;">Login ou Cadastro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/contato" style="font-size: 18px; font-weight: bold;">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/cardapio" style="font-size: 18px; font-weight: bold;">Cardápio</a>
                    </li>
                    <!-- Atalho para a área restrita com ícone de cadeado -->
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/loginFuncionario" style="font-size: 18px; font-weight: bold;">
                            <i class="bi bi-lock"></i> Área Restrita
                        </a>
                    </li>
                    <!-- Ícone do carrinho -->
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/carrinho" style="font-size: 18px; font-weight: bold;">
                            <i class="bi bi-cart"></i> Carrinho
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Banner -->
    <div class="container-fluid p-0">
        <img id="rangodorei" src="https://www.rangodorei.com.br/wp-content/uploads/2018/10/banner1-1920x878.jpg" class="img-fluid" alt="Banner" style="width: 100%; height: auto;">
    </div>

    <div style="background-color: #f1d398; height: 4vh;"></div>

    <!-- Footer reformulado -->
    <footer style="background-color: #ed1c24; width: 100%; color: white; padding: 20px 0; position: relative;">
        <div class="container">
            <div class="row text-center text-md-start align-items-center">
                <!-- Logo -->
                <div class="col-md-4 mb-4 mb-md-0">
                    <img src="https://www.rangodorei.com.br/wp-content/themes/rangodorei/images/logo_header.png" alt="Rango do Rei" style="height: 100px;">
                </div>

                <!-- Links para outras páginas -->
                <div class="col-md-4 mb-4 mb-md-0">
                    <ul style="list-style: none; padding-left: 0;">
                        <li><a href="/cardapio" style="text-decoration: none; color: white;">Cardápio</a></li>
                        <li><a href="/contato" style="text-decoration: none; color: white;">Contato</a></li>
                    </ul>
                </div>

                <!-- Informações de contato -->
                <div class="col-md-4">
                    <ul style="list-style: none; padding-left: 0;">
                        <li><a href="https://www.instagram.com/rangodorei/" style="text-decoration: none; color: white;">Instagram: @rangodorei</a></li>
                        <li>contato@rangodorei.com.br</li>
                        <li>(31) 99185-1690</li>
                    </ul>
                </div>
            </div>

            <!-- Direitos reservados -->
            <div class="row mt-4">
                <div class="col text-center">
                    <p>&copy; 2024 Rango do Rei - Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="..\js\rango.js"> </script>
</body>
</html>
