<?php
namespace Xpressengine\Plugins\OSSBannerSkins\Components\SSCSnb;

use Xpressengine\Plugins\Banner\BannerWidgetSkin;

class WidgetSkin extends BannerWidgetSkin
{
    protected static $path = 'oss_banner_skins/components/SSCSnb';

    /**
     * 스킨을 출력한다.
     * 만약 view 이름과 동일한 메소드명이 존재하면 그 메소드를 호출한다.
     *
     * @return Renderable|string
     */
    public function render()
    {
        $this->data['item'] = $this->data['items']->shuffle()->first();

        return parent::render();
    }
}
