@extends('layouts.base')

@section('pageTitle', 'Movies')
    
@section('content')
    <main>
        <@foreach ($movies as $movie)
            
            <div class="card">
                <h2>{{$movie['title']}}</h2>
                <h4>{{$movie['original_title']}}</h4>
                <h5>{{$movie['nationality']}}</h5>
                <h5>{{$movie['date']}}</h5>
            </div>

        @endforeach
    </main>
@endsection