<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Editar mascota</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="{{route('mascotas.update',$mascota->ID)}}" method="post">
    @csrf
    @method('PUT')
        <label>Especie</label>
        <select name="especie" required>
            <option disabled value="">Elige una especie</option>
            @foreach($especies as $especie)
                <option value="{{$especie->ID}}" @if($especie->ID == $mascota->ID_especie) selected @endif >{{$especie->Nombre}}</option>
            @endforeach
        </select>
        <br/>
        <label>Nombre</label>
        <input type="text" name="nombre" placeholder="Nombre de la mascota" value="{{$mascota->Nombre}}" required>
        <br/>
        <label>Precio</label>
        <input type="text" name="precio" placeholder="Precio de la mascota" value="{{$mascota->Precio}}" required>
        <br/>
        <label>Fecha de nacimiento</label>
        <input type="date" name="nacimiento" value="{{$mascota->Nacimiento}}" required>
        <br/>
        <button type="submit">Actualizar mascota </button>
    </form>
</body>
</html>