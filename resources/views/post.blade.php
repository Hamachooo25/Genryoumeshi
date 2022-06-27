@extends('layout')
@section('title','Restaurant')
@section ('home')
hello
    
    <div class="detail">
        <img src={{$post->picture_url }}>
        <h1>{{$post ->title}}</h1>
        <p>{{$post ->body}}</p>

    </div>
    
@endsection