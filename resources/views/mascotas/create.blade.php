@extends('layouts.default')
@section('titulo_pagina','Mascotas | Lista de mascotas')
@section('titulo','Mascotas')
@section('subtitulo','Lista de mascotas')
@section('contenido')
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
@endsection
