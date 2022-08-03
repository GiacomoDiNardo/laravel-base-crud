@extends('layout.app')

@section('page_title', "Comics")
    
@section('main_title')
<div class="container">
    <h1>Comics List</h1>
</div>
@endsection

@section('main_content')
<div class="container">
    <div class="row">
        @foreach ($comics as $comic)
            <a href="{{ route("comics.show", $comic->id) }}" class="col">
                <div class="card">
                    <h2>{{ $comic->title }}</h2>
                    <span>{{ $comic->price }}</span>
                    <h5>{{ $comic->series }}</h5>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection