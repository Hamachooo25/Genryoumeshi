@extends('layout')
@section('title','search result')
@section ('search')
    <div class='restaurants'>
     <h1>一覧</h1>
     <!--[<a href='/create'>create</a>-->
     
        @foreach ($restaurants as $restaurant)
            <div class='restaurant'>
                <table>
                    <tr>
                        <th><a href="/posts/{{$restaurant->id}}">{{ $restaurant->name}} </th>
                        <td>{{ $restaurant->address }}</td>
                        </a>
                    </tr>
                </table>
            </div>
            </a>
        @endforeach
    </div>
@endsection