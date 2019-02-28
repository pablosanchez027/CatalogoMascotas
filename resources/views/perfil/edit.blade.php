@extends('layouts.default')
@section('titulo_pagina','Mascotas | Perfil de Usuario')
@section('titulo','Mascotas')
@section('subtitulo','Perfil de Usuario')
@section('contenido')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Perfil de Usuario</h3>
            </div>
            <div class="box-body">
                Formulario
                <div class="form-group">
                    <label>Nombre</label>
                    <input class="form-control" value="{{ $usuario->name }}" type="text">
                </div>
                <div class="form-group">
                    <label>Correo</label>
                    <input class="form-control" type="email" value="{{ $usuario->email }}" readonly>
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <input class="form-control" type="file">
                </div>
                <div class="form-group">
                    @if($usuario->foto)
                    <img src="{{ $usuario->foto }}" style="width: 400px; height: auto;" class="img-responsive">
                    @endif
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input class="form-control" type="password">
                </div>
                <div class="form-group">
                    <label>Confirmar Contraseña</label>
                    <input class="form-control" type="password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection