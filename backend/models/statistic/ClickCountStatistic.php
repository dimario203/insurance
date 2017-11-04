<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 11/2/17
 * Time: 2:29 PM
 */

namespace app\models\statistic;

use \app\models\polis\Locality;


class ClickCountStatistic
{
    const POLIS_TYPE_OSAGO = 1;
    const POLIS_TYPE_TRAVEL = 2;
    const POLIS_TYPE_LIVE = 3;
    const POLIS_TYPE_REALTY = 4;
    const POLIS_TYPE_KASKO = 5;


    public function getRegions(){
        $result = [];
        $local_regins = Locality::find()->asArray()->with('regions')->all();
        foreach($local_regins as $local_regin){
            foreach($local_regin['regions'] as $region){
                $result[$local_regin['name']][$region['region_id']] = $region['name'];
            }
        }
        return $result;
    }

    public function clickRegionStatictic($post){
        $data = [];
        if(isset($post['date_in']) && !empty($post['date_in'])){
            $date_in = strtotime($post['date_in']);
        } else {
            $date_start = date('m/01/Y');
            $date_in = strtotime($date_start);

        }
        if(isset($post['date_out']) && !empty($post['date_out'])){
            $date_out = strtotime($post['date_out']);
        } else {
            $date_end = date('m/d/Y');
            $date_out = time();
        }

        $clicks = ClickCount::find()
            ->where(['in', 'polis_type', $post['polis']])
            ->andWhere(['in', 'region_id', $post['region']])
            ->andWhere(['between', 'date', $date_in, $date_out])
            ->with(['region'])
            ->asArray()
            ->all();
        $count_reg_click = [];
        if($clicks!=[]){
            foreach($clicks as $click){
                if(!isset($count_reg_click[$click['region']['name']][$click['polis_type']])){
                    $count_reg_click[$click['region']['name']][$click['polis_type']] = 1;
                }else {
                    $count_reg_click[$click['region']['name']][$click['polis_type']]++;
                }
            }
        }

        $data['osago'] = ['name'=>'ОСАГО'];
        $data['travel'] = ['name'=>'Путишествия'];
        $data['live'] = ['name'=>'Жизнь и Здоровье'];
        $data['realty'] = ['name'=>'Недвижимость'];
        $data['kasko'] = ['name'=>'КАСКО'];
        foreach($count_reg_click as $region=>$polises){
            $data['categories'][] = $region;
            $osago_empty = 0;
            $travel_empty = 0;
            $live_empty = 0;
            $realty_empty = 0;
            $kasko_empty = 0;
            foreach($polises as $polis_id=>$count){
                switch ($polis_id){
                    case self::POLIS_TYPE_OSAGO:
                        $data['osago'][]=$count;
                        $osago_empty = 1;
                        break;
                    case self::POLIS_TYPE_TRAVEL:
                        $data['travel'][]=$count;
                        $travel_empty = 1;
                        break;
                    case self::POLIS_TYPE_LIVE:
                        $data['live'][]=$count;
                        $live_empty = 1;
                        break;
                    case self::POLIS_TYPE_REALTY:
                        $data['realty'][]=$count;
                        $realty_empty = 1;
                        break;
                    case self::POLIS_TYPE_KASKO:
                        $data['kasko'][]=$count;
                        $kasko_empty = 1;
                        break;
                }
            }
            if($osago_empty==0){
                $data['osago'][] = 0;
            }
            if($travel_empty==0){
                $data['travel'][] = 0;
            }
            if($live_empty==0){
                $data['live'][] = 0;
            }
            if($realty_empty==0){
                $data['realty'][] = 0;
            }
            if($kasko_empty==0){
                $data['kasko'][] = 0;
            }
        }

        //print_r($data);die('date');
        //echo $data['categories'];die('eee');
        return $data;
    }
}