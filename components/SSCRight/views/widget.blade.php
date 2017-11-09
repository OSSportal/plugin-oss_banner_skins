<li class="mbook">
    <a href="{{ url($item->link) }}" target="{{ $item->link_target }}">
        <p><strong>{{ $item->title }}</strong><br /> <span class="tc">{!! $item->content !!}</span> </p>
        <img src="{{ $item->imageUrl() }}" width="119" height="162" alt role="presentation">
    </a>
</li>