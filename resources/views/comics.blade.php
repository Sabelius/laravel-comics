@extends('layouts.main')

@section('title', 'Comics')

@section('content')

<div class="container-comics">
<div class="comics-part">
    @foreach($comics_card as $card) 
    <div class="comics-stuff">
    <img class="comic-image" src="{{ $card['thumb']}}">
    <h4>{{$card['title']}}</h4>
    </div>
    @endforeach
</div>
<div class="button"><button>LOAD MORE</button></div>
</div>
@endsection