<header>
<a href="{{url("/")}}">
<img class="header-logo" src="{{ asset('images/dc-logo.png') }}">
</a>

<ul>
    @foreach ($links as $link)
    <li><a href="{{ route($link['route']) }}">{{ $link['text'] }}</a></li>
    @endforeach
</ul>
</header>