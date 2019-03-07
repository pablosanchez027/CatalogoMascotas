@extends('layouts.default')
@section('titulo_pagina','Mascotas | Agregar Mascota')
@section('titulo','Mascotas')
@section('subtitulo','Agregar mascota')
@section('contenido')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <form action="{{route('mascotas.store')}}" method="post" role="form">
                    @csrf
                    <div class="form-group">
                        <label>Especie</label>
                        <select class="form-control" name="especie" required>
                            <option disabled selected value="">Elige una especie</option>
                            @foreach($especies as $especie)
                            <option value="{{$especie->ID}}">{{$especie->Nombre}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Nombre</label>
                        <input class="form-control" type="text" name="nombre" placeholder="Nombre de la mascota"
                            required>
                    </div>
                    <div class="form-group">
                        <label>Precio</label>
                        <input class="form-control" type="text" name="precio" placeholder="Precio de la mascota"
                            required>
                    </div>
                    <div class="form-group">
                        <label>Fecha de nacimiento</label>
                        <input class="form-control" type="date" name="nacimiento" required>
                    </div>
                    <div class="form-group">
                        <label>País</label>
                        <select class="form-control" type="date" name="pais" required>
                            <option disabled selected value="">Elige un país</option>
                            @foreach($paises as $pais)
                            <option value="{{$pais->id}}">{{$pais->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Estado</label>
                        <select class="form-control" type="date" name="estado" required>
                            <option disabled selected value="">Elige un estado</option>
                            @foreach($especies as $especie)
                            <option value="{{$especie->ID}}">{{$especie->Nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-default">Crear nueva mascota </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection