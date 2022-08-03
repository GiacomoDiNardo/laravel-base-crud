@extends('layout.app')

@section('page_title', "Comics")
    
@section('main_title')
<div class="container">
    <h1>Comics {{ $comic->id }}</h1>
</div>
@endsection

@section('main_content')
<div class="container">
    <h2>{{ $comic->title }}</h2>
    <p>{{ $comic->description }}</p>
</div>
@endsection