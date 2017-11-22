<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 11/21/17
 * Time: 3:31 PM
 */

namespace app\models\polis;


use yii\data\ArrayDataProvider;
use yii\data\Pagination;

class OsagoFind
{
    public function getOsagoPolis($find_model){
        $region_polises = [];
        $another_region_polises = [];
        $all_polises = Osago::find()
            //->where(['region_id'=>$find_model->region])
            ->where(['power'=>$find_model->power])
            ->andWhere(['age'=>$find_model->min_age])
            ->andWhere(['experience'=>$find_model->experience])
            ->with('company')
            ->asArray()
            ->all();

        foreach($all_polises as $polis){
            if($polis['region_id']==$find_model->region){
                $region_polises[] = $polis;
            } else {
                $another_region_polises[] = $polis;
            }
        }
        return ['region_polises'=>$region_polises, 'another_region_polises'=>$another_region_polises];
    }

    public function getAnotherRegionPolis($find_model, $count){
        $another_region_polises = Osago::find()
            ->where(['not in','region_id', [$find_model->region]])
            ->andWhere(['power'=>$find_model->power])
            ->andWhere(['age'=>$find_model->min_age])
            ->andWhere(['experience'=>$find_model->experience])
            ->limit($count)
            ->with('company')
            ->asArray()
            ->all();
        return $another_region_polises;
    }
}