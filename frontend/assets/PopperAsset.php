<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 11/6/17
 * Time: 3:44 PM
 */

namespace frontend\assets;


use yii\web\AssetBundle;

class PopperAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [];
    public $js = [
        "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js",
    ];
    public $jsOptions = [
        'integrity' => "sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh",
        'crossorigin' => "anonymous",
        ];
    public $depends = [
        '\yii\web\JqueryAsset',
    ];
}