@extends('layouts.app')

@section('page-title', 'Home')

@section('content')
@php
    $comicsArr = include('../config/comics.php'); // Aggiorna il percorso corretto
@endphp
<main>
    <!-- Jumbotron -->
    <div class="jumbotron">
        <!-- Puoi aggiungere contenuti qui se necessario -->
    </div>
    
    <div class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row">
                @foreach($comicsArr as $comic)
                    <div class="col-md-2 mb-4">
                        <div class="">
                            <img src="{{ $comic['thumb'] }}" class="img-top" alt="{{ $comic['title'] }}">
                            <div class="body">
                                <h5 class="title">{{ $comic['series'] }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center my-4"> 
                <button class="btn btn-primary">LOAD MORE</button>
            </div>
        </div>
    </div>
    <div class="bg-primary">

        @include('partials.comicsLinks')
    </div>
</main>



@endsection
