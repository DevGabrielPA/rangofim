<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio - Rango do Rei</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f1d398;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        header,
        footer {
            background-color: #ed1c24;
            color: white;
            padding: 10px 0;
            text-align: center;
            border: none;
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

        .title {
            color: #ed1c24;
            font-size: 2em;
            font-weight: bold;
            margin: 20px 0;
            text-decoration: underline;
        }

        .menu-section {
            margin-bottom: 40px;
        }

        .menu-section h2 {
            font-size: 1.5em;
            margin-bottom: 20px;
        }

        .menu-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .menu-card {
            background-color: #fff;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            flex-basis: calc(25% - 30px);
        }

        .menu-card h3 {
            font-size: 1.2em;
            color: #ed1c24;
            margin-bottom: 10px;
        }

        .menu-card p {
            color: #333;
            font-size: 0.9em;
        }

        .menu-card img {
            width: 100%;
            border-radius: 8px;
        }

    

        .cardapio-section {
            margin: 40px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 30px;
            font-weight: bold;
            font-size: 28px;
        }

        .info-div {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        @media (max-width: 768px) {
            .menu-card {
                flex-basis: calc(50% - 30px);
            }
        }

        @media (max-width: 576px) {
            .menu-card {
                flex-basis: calc(100% - 30px);
            }
        }

        .cardapio-section {
            margin: 40px 0;
        }
        .section-title {
            text-align: center;
            margin-bottom: 30px;
            font-weight: bold;
            font-size: 28px;
        }
        .info-div {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            text-align: center;
        }
        .bg-refeicoes { background-color: #ffdfba; }
        .bg-lanches { background-color: #ffd3b6; }
        .bg-sobremesas { background-color: #fdffb6; }
        .bg-bebidas { background-color: #caffbf; }
        .product-section {
            margin-top: 50px;
        }
        .product-card {
            margin-bottom: 30px;
        }
        .product-card img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .product-card .card-body {
          
            text-align: center;
        }
        .btn-custom {
            background-color: #ed1c24;
            color: white;
            margin-top: 10px;
        }
        .btn-custom:hover {
            background-color: #d4171d;
        }        
    </style>
</head>

<body>

    <!-- Botão de voltar -->
    <a href="/home" class="btn-back">
        <img src="https://cdn-icons-png.flaticon.com/512/93/93634.png" alt="Voltar" title="Voltar à página inicial">
    </a>

    <header>
        <h1>Rango do Rei</h1>
    </header>

    <div class="title">CARDÁPIOS</div>

    <!-- Cardápio Escola -->
    <div class="menu-section">
        <h2>Cardápio Escola</h2>
        <div class="menu-container">
            <!-- Refeições -->
            <div class="menu-card" style="background-color: #ffcccb;">
                <h3>Refeições</h3>
                <p>Almoço (Prato Feito), Almoço (Kg), Macarrão à Bolonhesa</p>
            </div>

            <!-- Lanches Rápidos -->
            <div class="menu-card" style="background-color: #add8e6;">
                <h3>Lanches Rápidos</h3>
                <p>Pão de Queijo, Bolo Caseiro, Salgado Simples, Pão de Queijo Recheado, Pipoca Caseira, Hamburguer Assado, Mini Pizza, Tortão de Frango com Catupiry, Wrap</p>
            </div>

            <!-- Sobremesas -->
            <div class="menu-card" style="background-color: #ffffe0;">
                <h3>Sobremesas</h3>
                <p>Abacaxi Gelado, Arroz Doce, Açaí/Frozen Casquinha, Açaí/Frozen Creme, Cremes, Barrinha de Cereal, Bolo no Pote, Geladinho Natural, Gelatina Diet, Fruta, Potinho de Morangos/Uvas, Salada de Frutas</p>
            </div>

            <!-- Bebidas -->
            <div class="menu-card" style="background-color: #d3ffce;">
                <h3>Bebidas</h3>
                <p>Café, Café com Leite, Leite com Toddy, Achocolatado, Cappuccino, Água Mineral/Gasosa, Água de Coco, Chá Gelado, Guaraviton, Refresco, Suco Lata, Guaramorango, Guaracujá, Vitamina Natural, Suco de Laranja, Limonada Suíça, Caldos</p>
            </div>
        </div>
    </div>

    <!-- Cardápio Faculdade -->
    <div class="menu-section">
        <h2>Cardápio Faculdade</h2>
        <div class="menu-container">
            <!-- Refeições -->
            <div class="menu-card" style="background-color: #ffcccb;">
                <h3>Refeições</h3>
                <p>Cento de Salgadinhos, Porção Carne Magra, Carne c/ Batata, Batata Completa, Batata Simples, Almoço, Macarrão à Bolonhesa, Tapioca, Caldos</p>
            </div>

            <!-- Lanches Rápidos -->
            <div class="menu-card" style="background-color: #add8e6;">
                <h3>Lanches Rápidos</h3>
                <p>Wrap, Mini Pizza, Salgado Especial, Salgado Simples, Pão de Queijo Recheado, Pão de Queijo, Bolo</p>
            </div>

            <!-- Sobremesas -->
            <div class="menu-card" style="background-color: #ffffe0;">
                <h3>Sobremesas</h3>
                <p>Açaí Creme, Frozen Iogurte Grego, Açaí Casquinha, Milk Shake, Sorvete Casquinha, Salada de Frutas, Bolo no Pote, Brownie, Palha Italiana, Cookie, Gelatina Diet</p>
            </div>

            <!-- Bebidas -->
            <div class="menu-card" style="background-color: #d3ffce;">
                <h3>Bebidas</h3>
                <p>Vitaminas/Sucos, Suco de Laranja, Limonada Suíça, Água, Café, Refresco, Água c/ Gás, Refrigerante, Suco, Gatorade, Ice Tea, Energético</p>
            </div>
        </div>
    </div>

    <!-- Produtos com Imagens e Botão de Carrinho --> <div class="container product-section">
        <h3 class="section-title">Refeições</h3>
        <div class="row">
            <!-- Produto 1 -->
            <div class="col-md-3 product-card">
                <img src="https://www.rangodorei.com.br/wp-content/uploads/2018/10/Refeicoes-Almoco.png" alt="Almoço">
                <div class="card-body">
                    <h5>Almoço</h5>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que adicionar este produto ao carrinho?');">Adicionar ao Carrinho</button>
                </div>
            </div>
            <!-- Produto 2 -->
            <div class="col-md-3 product-card">
                <img src="https://www.rangodorei.com.br/wp-content/uploads/2018/10/Refeicoes-Tapioca-Frango-com-Requeijao.png" alt="Tapioca Frango">
                <div class="card-body">
                    <h5>Tapioca Frango</h5>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que adicionar este produto ao carrinho?');">Adicionar ao Carrinho</button>
                </div>
            </div>
            <!-- Produto 3 -->
            <div class="col-md-3 product-card">
                <img src="https://www.rangodorei.com.br/wp-content/uploads/2018/10/Refeicoes-Tapioca-Napolitano.png" alt="Tapioca Napolitana">
                <div class="card-body">
                    <h5>Tapioca Napolitana</h5>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que adicionar este produto ao carrinho?');">Adicionar ao Carrinho</button>
                </div>
            </div>
            <!-- Produto 4 -->
            <div class="col-md-3 product-card">
                <img src="https://www.rangodorei.com.br/wp-content/uploads/2018/10/Refeicoes-Macarrao-a-Bolonhesa.png" alt="Macarrão à Bolonhesa">
                <div class="card-body">
                    <h5>Macarrão à Bolonhesa</h5>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que adicionar este produto ao carrinho?');">Adicionar ao Carrinho</button>
                </div>
            </div>
        </div>

        <!-- Lanches Rápidos -->
        <h3 class="section-title">Lanches Rápidos</h3>
        <div class="row">
            <div class="col-md-3 product-card">
                <img src="https://www.rangodorei.com.br/wp-content/uploads/2018/10/Lanches-Rapidos-Salgado-Simples-Mini-Salgados@1x.jpg" alt="Mini Salgados">
                <div class="card-body">
                    <h5>Mini Salgados</h5>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que adicionar este produto ao carrinho?');">Adicionar ao Carrinho</button>
                </div>
            </div>
            <div class="col-md-3 product-card">
                <img src="https://www.rangodorei.com.br/wp-content/uploads/2018/10/Lanches-Rapidos-Pao-de-Queijo@1x.jpg" alt="Pão de Queijo">
                <div class="card-body">
                    <h5>Pão de Queijo</h5>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que adicionar este produto ao carrinho?');">Adicionar ao Carrinho</button>
                </div>
            </div>
            <div class="col-md-3 product-card">
                <img src="https://www.rangodorei.com.br/wp-content/uploads/2018/10/Lanches-Rapidos-Pao-de-Queijo-Recheado@1x.jpg" alt="Pão de Queijo Recheado">
                <div class="card-body">
                    <h5>Pão de Queijo Recheado</h5>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que adicionar este produto ao carrinho?');">Adicionar ao Carrinho</button>
                </div>
            </div>
            <div class="col-md-3 product-card">
                <img src="https://www.rangodorei.com.br/wp-content/uploads/2018/10/Lanches-Rapidos-Salgados-2@1x.jpg" alt="Salgado">
                <div class="card-body">
                    <h5>Salgado</h5>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que adicionar este produto ao carrinho?');">Adicionar ao Carrinho</button>
                </div>
            </div>
        </div>

        <!-- Sobremesas -->
        <h3 class="section-title">Sobremesas</h3>
        <div class="row">
            <div class="col-md-3 product-card">
                <img src="https://www.rangodorei.com.br/wp-content/uploads/2018/10/Sobremesas-Acai-Creme@1x.jpg" alt="Açaí Creme">
                <div class="card-body">
                    <h5>Açaí Creme</h5>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que adicionar este produto ao carrinho?');">Adicionar ao Carrinho</button>
                </div>
            </div>
            <div class="col-md-3 product-card">
                <img src="https://www.rangodorei.com.br/wp-content/uploads/2018/10/Sobremesas-Casquinha-Mista-de-Acai@1x.jpg" alt="Açaí Casquinha">
                <div class="card-body">
                    <h5>Açaí Casquinha</h5>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que adicionar este produto ao carrinho?');">Adicionar ao Carrinho</button>
                </div>
            </div>
            <div class="col-md-3 product-card">
                <img src="https://www.rangodorei.com.br/wp-content/uploads/2018/10/Sobremesas-Milk-Shake-3@1x.jpg" alt="Milk Shake">
                <div class="card-body">
                    <h5>Milk Shake</h5>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que adicionar este produto ao carrinho?');">Adicionar ao Carrinho</button>
                </div>
            </div>
            <div class="col-md-3 product-card">
                <img src="https://www.rangodorei.com.br/wp-content/uploads/2018/10/Sobremesas-Salada-de-Frutas@1x.jpg" alt="Salada de Frutas">
                <div class="card-body">
                    <h5>Salada de Frutas</h5>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que adicionar este produto ao carrinho?');">Adicionar ao Carrinho</button>
                </div>
            </div>
        </div>

        <!-- Bebidas -->
        <h3 class="section-title">Bebidas</h3>
        <div class="row">
            <div class="col-md-3 product-card">
                <img src="https://www.rangodorei.com.br/wp-content/uploads/2018/10/Bebidas-Suco-de-Laranja@1x.jpg" alt="Suco de Laranja">
                <div class="card-body">
                    <h5>Suco de Laranja</h5>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que adicionar este produto ao carrinho?');">Adicionar ao Carrinho</button>
                </div>
            </div>
            <div class="col-md-3 product-card">
                <img src="https://www.rangodorei.com.br/wp-content/uploads/2018/10/Bebidas-Refresco@1x.jpg" alt="Refresco">
                <div class="card-body">
                    <h5>Refresco</h5>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que adicionar este produto ao carrinho?');">Adicionar ao Carrinho</button>
                </div>
            </div>
            <div class="col-md-3 product-card">
                <img src="https://www.rangodorei.com.br/wp-content/uploads/2018/10/Bebidas-Limonada-Suica@1x.jpg" alt="Limonada Suíça">
                <div class="card-body">
                    <h5>Limonada Suíça</h5>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que adicionar este produto ao carrinho?');">Adicionar ao Carrinho</button>
                </div>
            </div>
            <div class="col-md-3 product-card">
                <img src="https://www.rangodorei.com.br/wp-content/uploads/2018/10/acai.jpg" alt="Açaí">
                <div class="card-body">
                    <h5>Açaí</h5>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que adicionar este produto ao carrinho?');">Adicionar ao Carrinho</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>© 2024 Rango do Rei. Todos os direitos reservados.</p>
    </footer>
 

</body>

</html>