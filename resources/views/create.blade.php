@extends('layout')
@section('title','new post')
@section ('home')
    <div class="create-post">
        <h1>Blog Name</h1>
        <form action="/restaurants" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="post[title]" placeholder="お店の名前" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="お店の説明">{{ old('post.body') }}</textarea>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="picture-url">
                <h2>Title</h2>
                <input type="url" name="post[picture_url]" placeholder="写真のURL" />
            </div>
            <input type="submit" value="保存"/>
            
        </form>
        
        <div class="back">[<a href="/">back</a>]</div>
    </div>

@endsection