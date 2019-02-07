@extends('layouts.default')
@section('title', 'Mascotas - Lista de Mascotas')
@section('titulo', 'Mascotas')
@section('subtitulo', 'Lista de mascotas')
@section('contenido')

<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"></h3>
                <a href="{{route('mascotas.create')}}">
                    <button class="btn btn-primary">Agregar mascota</button>
                </a>
                <table class="table">
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
                                <td>$ {{ $mascota->Precio }}.00</td>
                                <td>
                                    <a class="btn btn-primary" href="{{route('mascotas.edit', $mascota->ID)}}">
                                        <i class="fa fa-fw fa-edit"></i>
                                    </a>
                                    <form method="POST" action="{{ route('mascotas.destroy', $mascota->ID) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit"><i class="fa fa-fw fa-trash"></i></button>
                                    </form>                        
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection