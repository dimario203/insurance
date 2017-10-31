<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 10/31/17
 * Time: 5:48 PM
 */

namespace app\models\statistic;


use frontend\models\statistic\Geo;

class Statistic
{
    const POLIS_TYPE_OSAGO = 1;
    const POLIS_TYPE_TRAVEL = 2;
    const POLIS_TYPE_LIVE = 3;
    const POLIS_TYPE_REALTY = 4;
    const POLIS_TYPE_KASKO = 5;


    public function addClick($polis_type){
        $model = new ClickCount();
        $geo = new Geo();
        $data_geo = $geo->get_value();
        if($data_geo==[]){
            $model->region_id = '';
        } elseif($data_geo['country']!='RU'){
            $model->region_id = -1;//Enother countries
        } else{
            $region = Region::find()->where(['name'=>$data_geo['city']])->asArray()->one();
            if($region!=[]){
                $model->region_id = $region['region_id'];
            } else {
                $locality = Locality::find()->where(['name'=>$data_geo['region']])->asArray()->one();
                if($locality!=[]){
                    $new_region = new Region();

                }
            }
        }
    }


    private function apiVk(){

    }
}