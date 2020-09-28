<?php
use Xpressengine\Plugins\OSSBannerSkins\Components\Expand\WidgetSkin;
?>
<div class="section-main-carousel"  id="banner_{{$group->id}}">
    <div class="section-main-carousel-list">
    @foreach ($items as $item)
        <div class="xf-carousel-item">
            <a href="{{ url($item->link) }}" target="_blank" class="base-a"><img src="{{ $item->imageUrl() }}" alt="{{ $item->title }}"></a>
        </div>
    @endforeach
    </div>
</div>


<script>
    $(document).ready(function(){
        $('.section-main-carousel-list').slick({
            slidesToShow: 5,
            slidesToScroll: 5,
            // autoplay: true,
            autoplaySpeed: 3000,
            infinite: false,
            arrows: true,
            
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 5
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 5
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
</script>

