<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Editar especie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="{{route('especies.update',$especie->ID)}}" method="post">
    @csrf
    @method('PUT')
        <label>Nombre</label>
        <input type="text" name="nombre" placeholder="Nombre de la especie" value="{{$especie->Nombre}}" required>
        <br/>
        <button type="submit">Actualizar especie </button>
    </form>
</body>
</html>