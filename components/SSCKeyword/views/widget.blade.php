<li class="msupport">
    <a href="{{ url($item->link) }}" target="{{ $item->link_target }}">
        <p>
            <strong>{{ $item->title }}</strong><br /> <span class="tn">{{ $item->content }}</span>
            <span class="timg"><img src="{{ $item->imageUrl() }}" width="100%" height="38" alt role="presentation"></span>
        </p>
        <ul class="item">
            @foreach(explode(',', array_get($item->etc, 'keywords', [])) as $word)
            <li>{{ trim($word) }}</li>
            @endforeach
        </ul>
    </a>
</li>