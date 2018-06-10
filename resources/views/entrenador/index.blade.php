@extends('layouts.app') 

@section('title', 'Entrenadores') 

@section('content')
    <div class="row">
        @foreach($entrenadores as $entrenador)
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    {{-- <img class="card-img-top" src=".../100px180/" alt="Card image cap"> --}}
                    <div class="card-body">
                    <h5 class="card-title">{{ $entrenador->nombre }}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Ver</a>
                    </div>
                </div>
            </div>        
        @endforeach
    </div>
@endsection