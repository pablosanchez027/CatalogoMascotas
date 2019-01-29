<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Crear mascota</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="{{route('mascotas.store')}}" method="post">
    @csrf
        <label>Especie</label>
        <select name="especie" required>
            <option disabled selected value="">Elige una especie</option>
            @foreach($especies as $especie)
                <option value="{{$especie->ID}}">{{$especie->Nombre}}</option>
            @endforeach
        </select>
        <br/>
        <label>Nombre</label>
        <input type="text" name="nombre" placeholder="Nombre de la mascota" required>
        <br/>
        <label>Precio</label>
        <input type="text" name="precio" placeholder="Precio de la mascota" required>
        <br/>
        <label>Fecha de nacimiento</label>
        <input type="date" name="nacimiento" required>
        <br/>
        <button type="submit">Crear nueva mascota </button>
    </form>
</body>
</html>