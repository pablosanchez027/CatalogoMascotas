@extends('layouts.default')
@section('contenido')
<a href="{{route('especies.create')}}">
    <button>Agregar especie</button>
</a>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($especies as $especie)
            <tr>
                <td>{{ $especie->Nombre }}</td>
                <td>
                    <a href="{{route('especies.edit', $especie->ID)}}">
                        <button>Editar</button>
                    </a>
                    <form method="POST" action="{{ route('especies.destroy', $especie->ID) }}">
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