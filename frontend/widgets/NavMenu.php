<?php
namespace frontend\widgets;

use yii\base\Widget;
use app\models\settings\GetSiteSettings;

class NavMenu extends Widget
{
    public function run()
    {
        $items = '';
        $settings = GetSiteSettings::getSettings();
        if($settings!=[]){
            if ($settings['find_all']!=1){
                return $this->render('nav-menu', ['items'=>$items]);
            } else {
                if($settings['find_osago']==1){
                    $active =  (\Yii::$app->controller->action->id == 'osago-form' || \Yii::$app->controller->action->id == 'osago-list')?'active':'';
                    $link = \yii\helpers\Url::to(['site/osago-form']);
                    $items =  $items."<li class=\"nav-item $active\"><a class=\"nav-link\" href=\"$link\">ОСАГО</a></li>";
                }
                if($settings['find_travel']==1){
                    $active =  (\Yii::$app->controller->action->id == 'travel-form' || \Yii::$app->controller->action->id == 'travel-list')?'active':'';
                    $link = \yii\helpers\Url::to(['site/travel-form']);
                    $items =  $items."<li class=\"nav-item $active\"><a class=\"nav-link\" href=\"$link\">ПУТЕШЕСТВИЯ</a></li>";
                }
                if($settings['find_live']==1){
                    $active =  (\Yii::$app->controller->action->id == 'live-form' || \Yii::$app->controller->action->id == 'live-list')?'active':'';
                    $link = \yii\helpers\Url::to(['site/live-form']);
                    $items =  $items."<li class=\"nav-item $active\"><a class=\"nav-link\" href=\"$link\">ЗДОРОВЬЕ И ЖИЗНЬ</a></li>";
                }
                if($settings['find_realty']==1){
                    $active =  (\Yii::$app->controller->action->id == 'realty-form' || \Yii::$app->controller->action->id == 'realty-list')?'active':'';
                    $link = \yii\helpers\Url::to(['site/realty-form']);
                    $items =  $items."<li class=\"nav-item $active\"><a class=\"nav-link\" href=\"$link\">НЕДВИЖИМОСТЬ</a></li>";
                }
                if($settings['find_kasko']==1){
                    $active =  (\Yii::$app->controller->action->id == 'kasko-form' || \Yii::$app->controller->action->id == 'kasko-list')?'active':'';
                    $link = \yii\helpers\Url::to(['site/kasko-form']);
                    $items =  $items."<li class=\"nav-item $active\"><a class=\"nav-link\" href=\"$link\">КАСКО</a></li>";
                }
            }
        }
        return $this->render('nav-menu', ['items'=>$items]);
    }
}