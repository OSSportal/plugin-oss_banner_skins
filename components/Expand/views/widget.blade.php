<?php
use Xpressengine\Plugins\OSSBannerSkins\Components\Expand\WidgetSkin;
?>
<div class="area_mrelated" id="banner_{{$group->id}}">
    <ul>
        @foreach($items as $idx => $item)
        <li><a href="{{ url($item->link) }}" target="{{ $item->link_target }}" title="{{ $item->content }}"><img src="{{ $item->imageUrl() }}" width="178" height="40" alt="{{ $item->title}}"></a></li>
        @endforeach
    </ul>

    <div>
        <button><img src="{{ asset(WidgetSkin::getPath().'/assets/images/btn_mup.gif') }}" width="15" height="16" alt="관련사이트 다른페이지 보기"></button>
        <button><img src="{{ asset(WidgetSkin::getPath().'/assets/images/btn_mdown.gif') }}" width="15" height="16" alt="관련사이트 다른페이지 보기"></button>
    </div>
</div>
{{ XeFrontend::html('oss::related.toggle')->content("
<script>
    $(function () {
        $('#banner_".$group->id." button').click(function () {
            $('#banner_".$group->id." > ul').toggleClass('on');
        });
    });
</script>
")->load() }}
