<header>
<img class="header-logo" src="{{ asset('images/dc-logo.png') }}">

<ul>
    @foreach ($links as $link)
    <li><a href="{{ route($link['route']) }}">{{ $link['text'] }}</a></li>
    @endforeach
</ul>
</header>