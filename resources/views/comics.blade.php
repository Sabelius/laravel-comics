@extends('layouts.main')

@section('title', 'Comics')

@section('content')

<div class="container-comics">
<div class="comics-part">
<div class="comics-stuff">
    @foreach($comics_card as $card) 
    <img src="{{ $card['thumb']}}">
    <h4>{{$card['title']}}</h4>
    </div>
    @endforeach
</div>
</div>
@endsection