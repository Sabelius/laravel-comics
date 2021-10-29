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
    <h2 class="info-name">TALENT</h2>
    <div class="talent">
        <div>
            <h5>Art by:</h5>
        </div>
        <div class="info-list">
            @foreach ( $single_comic['artists'] as $artist)
            <a href="#">
                {{ $artist }}{{$loop->last ? "" : ","}}
            </a>
            @endforeach
        </div>
    </div>
    <div class="talent2">
        <div>
            <h5>Written by:</h5>
        </div>
        <div class="info-list2">
            @foreach ( $single_comic['writers'] as $writer)
            <a href="#">
                {{ $writer }}{{$loop->last ? "" : ","}}
            </a>
            @endforeach
        </div>
    </div>
    <div class="specs"></div>
</div>

<div class="info2">
    <h2 class="info-name">SPECS</h2>
    <div class="talent">
        <div>
            <h5>Series:</h5>
        </div>
        <div class="info-list2">
            <a href="#">
                <p>{{ $single_comic['series'] }}</p>
            </a>
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

<hr>
<div class="first-section">
    <ul>
        <li>
          <a href=""
            ><img
              src="{{ asset('images/buy-comics-digital-comics.png') }}"
              alt="comicsbuy"
            />
            <h4>DIGITAL COMICS</h4></a
          >
        </li>
        <li>
          <a href=""
            ><div>
              <img
                src="{{ asset('images/buy-comics-merchandise.png') }}"
                alt="merchbuy"
              />
            </div>
            <h4>DC MERCHANDISE</h4></a
          >
        </li>
        <li>
            <a href="">
                <div>
                    <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="subs" />
                </div>
                <h4>SUBSCRIPTION</h4>
            </a>
        </li>
        <li>
            <a href="">
               <div>
                   <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="shop" />
                </div>
                <h4>COMIC SHOP LOCATOR</h4>
            </a>
        </li>
        <li>
            <a href="">
               <div>
                    <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="visa" />
                </div>
                <h4>DC POWER VISA</h4>
            </a>
        </li>
    </ul>
</div>

@endsection