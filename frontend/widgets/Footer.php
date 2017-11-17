<?php
namespace frontend\widgets;

use app\models\settings\SocialNetworks;
use yii\base\Widget;

class Footer extends Widget
{
    public function run()
    {
        $social_networks = [];
        $models = SocialNetworks::find()->asArray()->all();
        foreach($models as $network){
            $social_networks[$network['name']] = $network['url'];
        }
        return $this->render('footer', ['social_networks'=>$social_networks]);
    }
}