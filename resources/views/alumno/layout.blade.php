<?php
?>
<html lang="es_ES">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD: Listado de Alumnos</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <script src="{{ asset("js/app.js") }}"></script>
</head>
<body class="bg-dark text-light">
    <div class="container">
        <h1 class="m-3 text-info">CRUD de Alumnos</h1>
        <!--Aquí mostraremos un mensaje que podría retornarnos
        algún método del AlumnoController.-->
        @isset($msj)
            <h2 class="alert-dark">{{$msj}}</h2>
        @endisset

        @yield("contenido")
        @yield("opciones")
    </div>
</body>
</html>
