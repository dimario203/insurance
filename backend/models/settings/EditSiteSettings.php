<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 10/30/17
 * Time: 6:33 PM
 */

namespace app\models\settings;


class EditSiteSettings
{
    public function getSettings(){
        $settings = SiteSettings::find()->asArray()->one();
        return $settings;
    }

    public function setSettings($post){
        $settings = SiteSettings::find()->one();
        if(isset($post['is_available'])){
            if($post['is_available']!=$settings->is_available){
                $settings->is_available=$post['is_available'];
            }
        }
        if(!$settings->save()){
            return false;
        } else {
            return true;
        }


    }
}