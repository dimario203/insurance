<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 11/21/17
 * Time: 3:31 PM
 */

namespace app\models\polis;


class OsagoFind
{
    public function getOsagoPolis($find_model){
        $region_polises = [];
        $another_region_polises = [];
        $all_polises = Osago::find()
            //->where(['region_id'=>$find_model->region])
            ->where(['power'=>$find_model->power])
            ->where(['age'=>$find_model->min_age])
            ->where(['experience'=>$find_model->experience])
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
}