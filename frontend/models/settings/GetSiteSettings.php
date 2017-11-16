<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 11/16/17
 * Time: 1:59 PM
 */

namespace app\models\settings;


class GetSiteSettings
{
    static function getSettings(){
       $settings = SiteSettings::find()->asArray()->limit(1)->one();
       return $settings;
    }
}