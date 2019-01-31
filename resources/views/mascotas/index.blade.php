@extends('layouts.default')
@section('contenido')
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
                    <a href="{{route('mascotas.edit', $mascota->ID)}}">
                        <button>Editar</button>
                    </a>
                    <form method="POST" action="{{ route('mascotas.destroy', $mascota->ID) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Borrar</button>
                    </form>                        
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection