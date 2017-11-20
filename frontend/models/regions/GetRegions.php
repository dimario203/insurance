<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 11/20/17
 * Time: 3:21 PM
 */

namespace app\models\regions;


class GetRegions
{
    public static function get_Regions(){
        $result = [];
        $region_ids = [];
        $local_regins = Locality::find()->asArray()->with('regions')->all();
        foreach($local_regins as $local_regin){
            foreach($local_regin['regions'] as $region){
                $result[$local_regin['name']][$region['region_id']] = $region['name'];
            }
        }
        return $result;
    }
}