<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 11/20/17
 * Time: 3:21 PM
 */

namespace app\models\regions;
 use app\models\polis\Realty;

class GetRegions
{
    public static function get_Regions(){
        $result = [];
        $local_regins = Locality::find()->asArray()->with('regions')->all();
        foreach($local_regins as $local_regin){
            foreach($local_regin['regions'] as $region){
                $result[$local_regin['name']][$region['region_id']] = $region['name'];
            }
        }
        return $result;
    }

    public static function get_RealtyRegions(){
        $region_ids = [];
        $result = [];
        $region_id_model = Realty::find()->select('region_id')->groupBy('region_id')->asArray()->all();
        //print_r($region_ids); die('www');
        foreach($region_id_model as $region){
            $region_ids[] = $region['region_id'];
        }
        $local_regins = Locality::find()->asArray()->with('regions')->all();
        foreach($local_regins as $local_regin){
            foreach($local_regin['regions'] as $region){
                if(in_array($region['region_id'], $region_ids)){
                    $result[$local_regin['name']][$region['region_id']] = $region['name'];
                }
            }
        }
        return $result;
    }

    public static function getRegion($region_id){
        $region = Region::findOne($region_id);
        if($region!=null){
            return $region->name;
        } else {
            return 'Регион не найден';
        }
    }
}