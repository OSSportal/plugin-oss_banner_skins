<li class="mtech">
    <a href="{{ url($item->link) }}" target="{{ $item->link_target }}">
        <p>
            <strong>{{ $item->title }}</strong><span class="tn">│{{ array_get($item->etc, 'sub_title') }}</span><br>
            <span class="timg"><img src="{{ $item->imageUrl() }}" width="100%" height="100" alt="" role="presentation"></span>
            <span class="tc">{{ $item->content }}</span>
        </p>
    </a>
</li>
