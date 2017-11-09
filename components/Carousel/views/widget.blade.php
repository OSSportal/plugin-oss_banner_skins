<article class="area_mbnr carousel slide" id="banner_{{$group->id}}" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach($items as $idx => $item)
        <li data-target="#banner_{{$group->id}}" data-slide-to="{{$idx}}" class="{{$idx==0 ? 'active':''}}"><a href="#">{{$idx+1}}페이지</a></li>
        @endforeach
    </ol>
    <ul class="carousel-inner" role="listbox">
        @foreach($items as $idx => $item)
        <li class="page{{sprintf('%02d', $idx+1)}} item {{$idx==0 ? 'active':''}}">
            <a href="{{ url($item->link) }}" target="{{ $item->link_target }}">
                <p style="display: {{$idx>0 ? '':''}}">
                    <strong>{!! $item->content !!}</strong>
                    <img src="{{ $item->imageUrl() }}" width="100%" height="358" alt="" role="presentation">
                </p>
            </a>
        </li>
        @endforeach
    </ul>
</article>
