<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 11/6/17
 * Time: 3:44 PM
 */

namespace frontend\assets;


use yii\web\AssetBundle;

class DesigneAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.css',
        'css/bootstrap-datepicker.css',
        'css/styles.css',
        'css/login.css',
        'fonts/font-awesome/css/font-awesome.min.css',
    ];
    public $js = [
        "js/bootstrap.min.js",
        "js/bootstrap-datepicker.js",
        "js/bootstrap-datepicker.ru.min.js",
        "https://www.w3schools.com/lib/w3.js",
    ];
    public $depends = [
        '\yii\web\JqueryAsset',
    ];
}