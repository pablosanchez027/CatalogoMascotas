<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista de mascotas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <a href="{{route('mascotas.create')}}">
        <button>Agregar mascota</button>
    </a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mascotas as $mascota)
                <tr>
                    <td>{{ $mascota->Nombre }}</td>
                    <td>{{ $mascota->Precio }}</td>
                    <td>
                        <button>Editar</button>
                        <button>Borrar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>