@extends('layout.app')

@section('title', 'index')

@section('content')

<div class="container">
    <h1>Movies</h1>
    <div class="row justify-content-between">
    @foreach($movies as $movie)

        <div class="card m-2" style="width: 18rem;">
                 <h3 class="card-text">{{ $movie['title'] }}</h3>
                 <p class="card-text">Original-title: {{ $movie['original_title'] }}</p>
                 <p class="card-text">Nationality: {{ $movie['nationality'] }}</p>
                 <p class="card-text">Date: {{ $movie['date'] }}</p>
                 <p class="card-text">Vote: {{ $movie['vote'] }}</p>
 
        </div>
@endforeach
        </div>
</div>

@endsection