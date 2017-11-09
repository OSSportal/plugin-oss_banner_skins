<li class="mex">
    <a href="{{ url($item->link) }}" target="{{ $item->link_target }}">
        <img src="{{ $item->imageUrl() }}" width="100%" height="125" alt role="presentation">
        <p>
            <strong>{{ $item->title }}</strong><span class="tn">│{{ array_get($item->etc, 'sub_title') }}</span><br />
            <span class="tc">{{ $item->content }}</span>
        </p>
    </a>
</li>