<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 10/30/17
 * Time: 5:41 PM
 */

namespace backend\controllers;


use app\models\settings\EditSiteSettings;
use app\models\settings\SiteSettings;
use yii\web\Controller;
use yeesoft\controllers\admin\DashboardController;

class SiteSettingsController Extends DashboardController
{
    //public $layout = '@vendor/yeesoft/yii2-yee-core/views/layouts/admin/main.php';

    public function actionGetSettings(){
        $set = new EditSiteSettings();
        $settings = $set->getSettings();
        $social_networks = $set->getSocialNetworks();
        return $this->render('site-settings', ['settings'=>$settings, 'social_networks'=> $social_networks]);
    }


    public function actionSaveSettings(){
        $post = \Yii::$app->request->post();
        $set = new EditSiteSettings();
        $result = $set->setSettings($post);
        if($result){
            $status = 'ok';
            $message = "Настройки сайта обновлены";
        } else {
            $status = 'error';
            $message = "Настройки сайта не были обновлены, попробуйте еще раз";
        }
        $settings = $set->getSettings();
        $social_networks = $set->getSocialNetworks();
        return $this->render('site-settings', ['settings'=>$settings, 'social_networks'=> $social_networks, 'status'=>$status, 'mess'=>$message]);
    }
}