@extends('layouts.app') 

@section('title', 'Crear entrenador') 

@section('content')
    <form action="/entrenador" method="post" class="form-group" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre">
            <label for="avatar">Avatar</label>
            <input type="file" class="form-control" name="avatar" id="avatar">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection