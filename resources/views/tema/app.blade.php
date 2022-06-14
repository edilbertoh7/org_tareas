<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body class="bg-light">

<div class="container shadow bg-white">
    <div class="row">
        <div class="col-sm-12">
            <h3>CRUD YOUTUBE</h3>
        </div>
        <div class="col-sm-12">
            <a href="{{ route('tarea.create')  }}" class="btn btn-link">Crear Nueva Tarea</a>
            <a href="" class="btn btn-link">Listar Tarea</a>
        </div>
        <div class="col-sm-12">
            @yield('contenido')
        </div>
    </div>
</div>

</body>
</html>
