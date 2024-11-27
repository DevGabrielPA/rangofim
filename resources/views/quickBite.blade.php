<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickBite - Projetos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet"> 
    <style>
        .icon-background img {
            position: absolute;
            opacity: 0.2;
            width: 30px;
            height: 30px;
            filter: hue-rotate(50deg) saturate(2) brightness(1.5);
        }
        .icon1 { top: 5%; left: 15%; }
        .icon2 { top: 10%; left: 70%; }
        .icon3 { top: 20%; left: 25%; }
        .icon4 { top: 30%; left: 85%; }
        .icon5 { top: 35%; left: 10%; }
        .icon6 { top: 40%; left: 50%; }
        .icon7 { top: 50%; left: 20%; }
        .icon8 { top: 60%; left: 75%; }
        .icon9 { top: 70%; left: 30%; }
        .icon10 { top: 80%; left: 60%; }
        .icon11 { top: 85%; left: 15%; }
        .icon12 { top: 90%; left: 85%; }
        .icon13 { top: 15%; left: 5%; }
        .icon14 { top: 25%; left: 95%; }
        .icon15 { top: 45%; left: 65%; }
        .icon16 { top: 55%; left: 35%; }
        .icon17 { top: 65%; left: 5%; }
        .icon18 { top: 75%; left: 95%; }
        .icon19 { top: 20%; left: 50%; }
        .icon20 { top: 90%; left: 45%; } 
        body {
            font-family: 'Playfair Display', serif;
            margin: 0;
            padding: 0;
            background-color: #fff8e7;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
            position: relative;
        }

     

        /* Estilo do Título */
        .title {
            font-size: 6rem;
            font-weight: bold;
            color: #ffae42;
            text-align: center;
            margin-top: 10vh;
            opacity: 0;
            transform: translateY(-50px);
            animation: fadeIn 1.5s ease forwards;
        }

        .title:hover {
            color: #ff9900;
            text-shadow: 0 0 10px #ffae42;
        }

        /* Texto explicativo */
        .description {
            font-size: 1.5rem;
            color: #555;
            text-align: center;
            max-width: 800px;
            margin: 30px auto;
            line-height: 1.8;
            opacity: 0;
            transform: translateY(50px);
            animation: fadeIn 2s ease 0.5s forwards;
        }

        /* Link do Projeto */
        .projects-section {
            text-align: center;
            margin: 30px 0;
            opacity: 0;
            transform: translateY(50px);
            animation: fadeIn 2.5s ease 1s forwards;
        }

        .projects-title {
            font-size: 2rem;
            color: #ff9900;
            margin-bottom: 10px;
        }

        .projects-link a {
            font-size: 1.2rem;
            color: #555;
            text-decoration: none;
        }

        .projects-link a:hover {
            text-decoration: underline;
            color: #555;
        }

        /* Footer */
        footer {
            width: 100%;
            background: #ffd699;
            color: #555;
            text-align: center;
            padding: 20px;
            margin-top: auto;
            font-size: 1rem;
        }

        footer a {
            color: #555;
            text-decoration: none;
            margin: 0 10px;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Animações */
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
    </style>
</head>
<body>

<div class="icon-background">
        <!-- Ícones distribuídos -->
        <img src="https://img.icons8.com/?size=100&id=smpsnKAENJJy&format=png" class="icon1">
        <img src="https://img.icons8.com/?size=100&id=WwMIvKjF9n4X&format=png" class="icon2">
        <img src="https://img.icons8.com/?size=100&id=dDyEBS1jpwuP&format=png" class="icon3">
        <img src="https://img.icons8.com/?size=100&id=HqzCMBy2thS4&format=png" class="icon4">
        <img src="https://img.icons8.com/?size=100&id=mSWhCq5YzrgQ&format=png" class="icon5">
        <img src="https://img.icons8.com/?size=100&id=smpsnKAENJJy&format=png" class="icon6">
        <img src="https://img.icons8.com/?size=100&id=WwMIvKjF9n4X&format=png" class="icon7">
        <img src="https://img.icons8.com/?size=100&id=smpsnKAENJJy&format=png" class="icon8">
        <img src="https://img.icons8.com/?size=100&id=WwMIvKjF9n4X&format=png" class="icon9">
        <img src="https://img.icons8.com/?size=100&id=dDyEBS1jpwuP&format=png" class="icon10">
        <img src="https://img.icons8.com/?size=100&id=HqzCMBy2thS4&format=png" class="icon11">
        <img src="https://img.icons8.com/?size=100&id=mSWhCq5YzrgQ&format=png" class="icon12">
        <img src="https://img.icons8.com/?size=100&id=smpsnKAENJJy&format=png" class="icon13">
        <img src="https://img.icons8.com/?size=100&id=WwMIvKjF9n4X&format=png" class="icon14">
        <img src="https://img.icons8.com/?size=100&id=dDyEBS1jpwuP&format=png" class="icon15">
        <img src="https://img.icons8.com/?size=100&id=HqzCMBy2thS4&format=png" class="icon16">
        <img src="https://img.icons8.com/?size=100&id=mSWhCq5YzrgQ&format=png" class="icon17">
        <img src="https://img.icons8.com/?size=100&id=smpsnKAENJJy&format=png" class="icon18">
        <img src="https://img.icons8.com/?size=100&id=WwMIvKjF9n4X&format=png" class="icon19">
        <img src="https://img.icons8.com/?size=100&id=dDyEBS1jpwuP&format=png" class="icon20">
    </div>

    <div class="icon-background">
        <!-- Ícones distribuídos -->
        <!-- Mantido os ícones existentes -->
    </div>

    <div class="title">QuickBite</div>

    <div class="description">
        Somos a <strong>QuickBite</strong>, uma empresa dedicada a transformar a experiência dos alunos em cantinas escolares. 
        Desenvolvemos soluções inovadoras que reduzem filas, aprimoram o atendimento e facilitam o acesso a refeições de qualidade.
    </div>

    <div class="projects-section">
        <div class="projects-title">NOSSOS PROJETOS</div>
        <div class="projects-link">
            <a href="/home">PROJETO RANGO-DO-REI</a>
        </div>
    </div>

    <footer>
        &copy; 2024 QuickBite 
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

</body>
</html>
