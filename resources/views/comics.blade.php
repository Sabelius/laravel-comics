@extends('layouts.main')

@section('title', 'Comics')

@section('content')
@include('partials.jumbotron')

<div class="series-title-container"><h3 class="jumbo-title">CURRENT SERIES</h3></div>
    <div class="container-comics">
        <div class="comics-part">
            @foreach($comics_card as $card) 
                <div class="comics-stuff">
                    <a href="{{url("/single_comic/$loop->index")}}">
                        <img class="comic-image" src="{{ $card['thumb']}}">
                        <h4>{{$card['title']}}</h4>
                    </a>
                </div>
            @endforeach
        </div>
    <div class="button"><button>LOAD MORE</button></div>
@endsection