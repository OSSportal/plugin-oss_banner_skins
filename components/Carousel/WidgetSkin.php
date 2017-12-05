<?php
namespace Xpressengine\Plugins\OSSBannerSkins\Components\Carousel;

use Xpressengine\Plugins\Banner\BannerWidgetSkin;

class WidgetSkin extends BannerWidgetSkin
{
    protected static $path = 'oss_banner_skins/components/Carousel';

    /**
     * 스킨을 출력한다.
     * 만약 view 이름과 동일한 메소드명이 존재하면 그 메소드를 호출한다.
     *
     * @return Renderable|string
     */
    public function render()
    {
//        app('xe.frontend')->css(static::getPath().'/assets/bootstrap.carousel.css')->load();
//        app('xe.frontend')->js('assets/vendor/bootstrap/js/bootstrap.js')->appendTo('body')->load();

        app('xe.frontend')->css(static::getPath().'/assets/rise.css')->load();
        app('xe.frontend')->js(static::getPath().'/assets/rise.js')->appendTo('body')->load();
        $this->setView('rise');

        return parent::render();
    }
}
