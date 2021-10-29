<header>
<a href="{{url("/")}}">
<img class="header-logo" src="{{ asset('images/dc-logo.png') }}">
</a>

<ul class="ul">
    @foreach ($links as $link)
    <li class="{{request()->routeIs($link['route']) ? 'active' : ""}} li"><a href="{{ route($link['route']) }}">{{ $link['text'] }}</a></li>
    @endforeach
</ul>
</header>