<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- CSS da Aplicação -->

    <link rel="stylesheet" href="css/style.css">

     <!-- JS da Aplicação -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/js/scripts.js"></script>


    

</head>
<body>
    @yield ('content')

<footer>
    <p>Crud Clientes &copy; 2023</P>
</footer>
</body>
</html>