@extends('layouts.app') 

@section('title', 'Crear entrenador') 

@section('content')
<form action="/entrenador" method="post" class="form-group">
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection