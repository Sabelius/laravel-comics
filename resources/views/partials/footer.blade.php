<footer>
<div class="footer-section">
        <ul>
            <h3>DC COMICS</h3>
            @foreach ($links1 as $link1)
                <li><a href="{{ url($link1['url']) }}">{{ $link1['text'] }}</a></li>
            @endforeach
        </ul>
        <ul>
            <h3>SHOP</h3>
            @foreach ($links2 as $link2)
                <li><a href="{{ url($link2['url']) }}">{{ $link2['text'] }}</a></li>
            @endforeach
        </ul>
        <ul>
            <h3>DC</h3>
            @foreach ($links3 as $link3)
                <li><a href="{{ url($link3['url']) }}">{{ $link3['text'] }}</a></li>
            @endforeach
        </ul>
        <ul>
            <h3>SITES</h3>
            @foreach ($links4 as $link4)
                <li><a href="{{ url($link4['url']) }}">{{ $link4['text'] }}</a></li>
            @endforeach
        </ul>
        <div>
            <img src= "{{ asset('images/dc-logo-bg.png') }}"/>
        </div>
</div>


</footer>