<article class="area_bnr_top rise" id="banner_{{$group->id}}" data-ride="rise">
    <div class="area_bnr_page">
        <ol class="rise-indicators">
            @foreach($items as $idx => $item)
                <li data-target="#banner_{{$group->id}}" data-appear-to="{{$idx}}" class="{{$idx==0 ? 'active':''}}"><a href="#">{{$idx+1}}페이지</a></li>
            @endforeach
        </ol>
    </div>
    <ul class="rise-inner" role="listbox">
        @foreach($items as $idx => $item)
            <li class="page{{sprintf('%02d', $idx+1)}} item {{$idx==0 ? 'active':''}}" >
                <span class="img" style="background:url({{ $item->imageUrl() }}) no-repeat center top;"></span>
                <p style="display: {{$idx>0 ? '':''}}"><a href="{{ url($item->link) }}" target="{{ $item->link_target }}"><span>{{ $item->title }}</span></a></p>
            </li>
        @endforeach
    </ul>
</article>
