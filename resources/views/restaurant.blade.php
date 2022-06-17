@extends('layout')
@section('title','Restaurants')
@section ('home')
    <h1>Restaurants</h1>
    <div class='posts'>
        @foreach ($restaurants as $restaurant)
            <div class='post'>
                <h2 class='title'>{{ $restaurant->name}}</h2>
                <p class='body'>{{ $restaurant->address }}</p>
            </div>
        @endforeach
    </div>
@endsection