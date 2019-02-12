<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Crear especies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="{{route('especies.store')}}" method="post">
    @csrf
        <label>Nombre</label>
        <input type="text" name="nombre" placeholder="Nombre de la especie" required>
        <br/>
        <button type="submit">Crear nueva especie</button>
    </form>
</body>
</html>