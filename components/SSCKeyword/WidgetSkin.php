<?php
namespace Xpressengine\Plugins\OSSBannerSkins\Components\SSCKeyword;

use Xpressengine\Plugins\Banner\BannerWidgetSkin;

class WidgetSkin extends BannerWidgetSkin
{
    protected static $path = 'oss_banner_skins/components/SSCKeyword';

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

    public function renderBannerSetting($config = [])
    {
        return view($this->view('setting'), ['config' => $config]);
    }
}
