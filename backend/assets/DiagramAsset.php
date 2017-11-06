<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 11/6/17
 * Time: 3:44 PM
 */

namespace backend\assets;


use yii\web\AssetBundle;

class DiagramAsset extends AssetBundle
{
    public $sourcePath = '@bower/highcharts';
    public $css = [];
    public $js = [
        "highcharts.js",
        "modules/exporting.js",
        "/admin/app/js/diagramRegion.js"
    ];
    public $depends = [
        '\yii\web\JqueryAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}