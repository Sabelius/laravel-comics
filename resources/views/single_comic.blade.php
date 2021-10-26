@extends('layouts.main')

@section('title', )
@section('content') 

<div class="container">
    <div class="comic-info">
     <h1>{{ $single_comic['title'] }}</h1>
     <h4>U.S. Price : {{ $single_comic['price'] }}</h4>
     <p>{{ $single_comic['description'] }}</p>

    </div>
    <div class="image-adv">
        <img src="{{ asset('images/advertise.png') }}">

    </div>
</div>


@endsection