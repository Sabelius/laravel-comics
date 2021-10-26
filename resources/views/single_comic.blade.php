@extends('layouts.main')

@section('title', $single_comic['title'])
@section('content') 
@include('partials.jumbotron')

<div><img class="single-image-comic" src="{{ $single_comic['thumb']}}"></div>

<div class="container">
    <div class="comic-info">
     <h1>{{ $single_comic['title'] }}</h1>
     <h4>U.S. Price : {{ $single_comic['price'] }}</h4>
     <p>{{ $single_comic['description'] }}</p>
    </div>
    <div class="image-adv">
        <h5>ADVERTISEMENT</h5>
        <img src="{{ asset('images/advertise.png') }}">
    </div>
</div>

<div class="wrapper">
<div class="info">
    <h2>TALENT</h2>
    <div class="talent">
        <div>
            <h5>Art by:</h5>
        </div>
        <div class="info-list">
            @foreach ( $single_comic['artists'] as $artist)
            <p>{{ $artist }}, </p>
            @endforeach
        </div>
    </div>
    <div class="talent2">
        <div>
            <h5>Written by:</h5>
        </div>
        <div class="info-list2">
            @foreach ( $single_comic['writers'] as $writer)
            <p>{{ $writer }}, </p>
            @endforeach
        </div>
    </div>
    <div class="specs"></div>
</div>

<div class="info2">
    <h2>SPECS</h2>
    <div class="talent">
        <div>
            <h5>Series:</h5>
        </div>
        <div class="info-list2">
            <p>{{ $single_comic['series'] }}</p>
        </div>
    </div>
    <div class="talent2">
        <div>
            <h5>U.S. Price:</h5>
        </div>
        <div class="info-list2">
            <p>{{ $single_comic['price'] }}</p>
        </div>
    </div>
    <div class="talent2">
        <div>
            <h5>On Sale Date:</h5>
        </div>
        <div class="info-list2">
            <p>{{ $single_comic['sale_date'] }}</p>
        </div>
    </div>

</div>
</div>

@endsection