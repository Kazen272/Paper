<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


        <!-- Css da aplicação -->
        <link rel="stylesheet" href="/css/style.css">
        
        <!-- js da aplicação -->
        <script src="/js/script.js"></script>
        
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    </head>
    <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                    <img src="/img/CarlosEduardo.png" alt="CarlosLog">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="/entregas" class="nav-link">Entregas</a>
                    </li>

                    
                    <li class="nav-item">
                        <a href="/login" class="nav-link">Entrar</a>
                    </li>

                    
                    <li class="nav-item">
                        <a href="/cadastro" class="nav-link">Cadastrar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    @yield('content')    
    <footer>
        <div class="rodape-container">
            <p>CarlosLog &copy; 2024</p>
        </div>
    </footer> 
    <!-- js da aplicação -->
    <script src="/js/script.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>   
    </body>
</html>
