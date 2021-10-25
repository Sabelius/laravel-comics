<header>
<img src="{{ asset('images/dc-logo.png') }}" alt="">

<ul>
    @foreach ($links as $link)
    <li><a href="{{ route($link['route']) }}">{{ $link['text'] }}</a></li>
    @endforeach
</ul>
</header>