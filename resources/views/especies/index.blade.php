@extends('layouts.especie')
    @section('contenido2')
    <a href="{{route('especies.create')}}">
        <button class="btn btn-primary">Agregar especie</button>
    </a>
    <div class="table-responsive"> 
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($especies as $especie)
                <tr>
                    <td>{{ $especie->ID }}</td>
                    <td>{{ $especie->Nombre }}</td>
                    <td>
                        <a href="{{route('especies.edit',$especie->ID)}}">
                        <button class="btn btn-primary"><i class="fa fa-fw fa-edit"></i>Editar</button>
                        <form method="POST" action="{{route('especies.destroy',$especie->ID)}}">
                        @csrf
                        @method('DELETE')
                            <button class="btn btn-danger" type="submit"><i class="fa fa-fw fa-trash"></i>Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    @endsection