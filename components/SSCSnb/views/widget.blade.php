{{--<p><a href="{{ url($item->link) }}" target="{{ $item->link_target }}"><img src="{{ $item->imageUrl() }}" width="225" height="58" alt="{{ $item->title }}"></a></p>--}}
@foreach ($items as $item)
<p><a href="{{ url($item->link) }}" target="{{ $item->link_target }}"><img src="{{ $item->imageUrl() }}" width="225" height="58" alt="{{ $item->title }}"></a></p>
@endforeach
