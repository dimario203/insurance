<?php

namespace app\models\statistic;

use app\models\company\Company;
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

    public function getCompanies(){
        $result = [];
        $companies = Company::find()->asArray()->all();
        foreach($companies as $company){
            $result[$company['company_id']] = $company['name'];
        }
        return $result;
    }

    public function clickCompaniesStatictic($post){
        $data = [];
        if(isset($post['date_in']) && !empty($post['date_in'])){
            $date_in = strtotime($post['date_in']);
            $data['date']['data_start'] =  $post['date_in'];
        } else {
            $date_start = date('m/01/Y');
            $date_in = strtotime($date_start);
            $data['date']['data_start'] = $date_start;
        }
        if(isset($post['date_out']) && !empty($post['date_out'])){
            $date_out = strtotime($post['date_out']);
            $data['date']['date_end'] = $post['date_out'];
        } else {
            $data['date']['date_end'] = date('m/d/Y');
            $date_out = time();
        }
        $clicks = ClickCount::find()
            ->where(['in', 'polis_type', $post['polis']])
            ->andWhere(['in', 'company_id', $post['companies']])
            ->andWhere(['between', 'date', $date_in, $date_out])
            ->with('company')
            ->asArray()
            ->all();
        $count_comp_click = [];
        if($clicks!=[]) {
            foreach ($clicks as $click) {
                if (!isset($count_comp_click[$click['company']['name']][$click['polis_type']])) {
                    $count_comp_click[$click['company']['name']][$click['polis_type']] = 1;
                } else {
                    $count_comp_click[$click['company']['name']][$click['polis_type']]++;
                }
            }
            if (isset($post['polis']['osago'])) {
                $data['polis']['osago'] = ['name' => 'ОСАГО'];
            }
            if (isset($post['polis']['travel'])) {
                $data['polis']['travel'] = ['name' => 'Путишествия'];
            }
            if (isset($post['polis']['live'])) {
                $data['polis']['live'] = ['name' => 'Жизнь и Здоровье'];
            }
            if (isset($post['polis']['realty'])) {
                $data['polis']['realty'] = ['name' => 'Недвижимость'];
            }
            if (isset($post['polis']['kasko'])) {
                $data['polis']['kasko'] = ['name' => 'КАСКО'];
            }
            foreach ($count_comp_click as $company_name => $polises) {
                $data['categories'][] = $company_name;
                $osago_no_empty = 0;
                $travel_no_empty = 0;
                $live__no_empty = 0;
                $realty_no_empty = 0;
                $kasko_no_empty = 0;
                foreach ($polises as $polis_id => $count) {
                    switch ($polis_id) {
                        case self::POLIS_TYPE_OSAGO:
                            $data['polis']['osago']['data'][] = $count;
                            $osago_no_empty = 1;
                            break;
                        case self::POLIS_TYPE_TRAVEL:
                            $data['polis']['travel']['data'][] = $count;
                            $travel_no_empty = 1;
                            break;
                        case self::POLIS_TYPE_LIVE:
                            $data['polis']['live']['data'][] = $count;
                            $live__no_empty = 1;
                            break;
                        case self::POLIS_TYPE_REALTY:
                            $data['polis']['realty']['data'][] = $count;
                            $realty_no_empty = 1;
                            break;
                        case self::POLIS_TYPE_KASKO:
                            $data['polis']['kasko']['data'][] = $count;
                            $kasko_no_empty = 1;
                            break;
                    }
                }
                if ($osago_no_empty == 0 && isset($post['polis']['osago'])) {
                    $data['polis']['osago']['data'][] = 0;
                }
                if ($travel_no_empty == 0 && isset($post['polis']['travel'])) {
                    $data['polis']['travel']['data'][] = 0;
                }
                if ($live__no_empty == 0 && isset($post['polis']['live'])) {
                    $data['polis']['live']['data'][] = 0;
                }
                if ($realty_no_empty == 0 && isset($post['polis']['realty'])) {
                    $data['polis']['realty']['data'][] = 0;
                }
                if ($kasko_no_empty == 0 && isset($post['polis']['kasko'])) {
                    $data['polis']['kasko']['data'][] = 0;
                }
            }
            $polises = [];
            foreach ($data['polis'] as $polis) {
                $polises[] = $polis;
            }
            $data['polis'] = $polises;
        }
        return $data;
    }


    public function clickRegionStatictic($post){
        $data = [];
        if(isset($post['date_in']) && !empty($post['date_in'])){
            $date_in = strtotime($post['date_in']);
            $data['date']['data_start'] =  $post['date_in'];
        } else {
            $date_start = date('m/01/Y');
            $date_in = strtotime($date_start);
            $data['date']['data_start'] = $date_start;
        }
        if(isset($post['date_out']) && !empty($post['date_out'])){
            $date_out = strtotime($post['date_out']);
            $data['date']['date_end'] = $post['date_out'];
        } else {
            $data['date']['date_end'] = date('m/d/Y');
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
        if($clicks!=[]) {
            foreach ($clicks as $click) {
                if (!isset($count_reg_click[$click['region']['name']][$click['polis_type']])) {
                    $count_reg_click[$click['region']['name']][$click['polis_type']] = 1;
                } else {
                    $count_reg_click[$click['region']['name']][$click['polis_type']]++;
                }
            }

            if (isset($post['polis']['osago'])) {
                $data['polis']['osago'] = ['name' => 'ОСАГО'];
            }
            if (isset($post['polis']['travel'])) {
                $data['polis']['travel'] = ['name' => 'Путишествия'];
            }
            if (isset($post['polis']['live'])) {
                $data['polis']['live'] = ['name' => 'Жизнь и Здоровье'];
            }
            if (isset($post['polis']['realty'])) {
                $data['polis']['realty'] = ['name' => 'Недвижимость'];
            }
            if (isset($post['polis']['kasko'])) {
                $data['polis']['kasko'] = ['name' => 'КАСКО'];
            }
            foreach ($count_reg_click as $region => $polises) {
                $data['categories'][] = $region;
                $osago_no_empty = 0;
                $travel_no_empty = 0;
                $live__no_empty = 0;
                $realty_no_empty = 0;
                $kasko_no_empty = 0;
                foreach ($polises as $polis_id => $count) {
                    switch ($polis_id) {
                        case self::POLIS_TYPE_OSAGO:
                            $data['polis']['osago']['data'][] = $count;
                            $osago_no_empty = 1;
                            break;
                        case self::POLIS_TYPE_TRAVEL:
                            $data['polis']['travel']['data'][] = $count;
                            $travel_no_empty = 1;
                            break;
                        case self::POLIS_TYPE_LIVE:
                            $data['polis']['live']['data'][] = $count;
                            $live__no_empty = 1;
                            break;
                        case self::POLIS_TYPE_REALTY:
                            $data['polis']['realty']['data'][] = $count;
                            $realty_no_empty = 1;
                            break;
                        case self::POLIS_TYPE_KASKO:
                            $data['polis']['kasko']['data'][] = $count;
                            $kasko_no_empty = 1;
                            break;
                    }
                }
                if ($osago_no_empty == 0 && isset($post['polis']['osago'])) {
                    $data['polis']['osago']['data'][] = 0;
                }
                if ($travel_no_empty == 0 && isset($post['polis']['travel'])) {
                    $data['polis']['travel']['data'][] = 0;
                }
                if ($live__no_empty == 0 && isset($post['polis']['live'])) {
                    $data['polis']['live']['data'][] = 0;
                }
                if ($realty_no_empty == 0 && isset($post['polis']['realty'])) {
                    $data['polis']['realty']['data'][] = 0;
                }
                if ($kasko_no_empty == 0 && isset($post['polis']['kasko'])) {
                    $data['polis']['kasko']['data'][] = 0;
                }
            }
            $polises = [];
            foreach ($data['polis'] as $polis) {
                $polises[] = $polis;
            }
            $data['polis'] = $polises;
        }
        return $data;
    }


    public function clickDynamicStatictic($post){
        $data = [];
        if(isset($post['date_in']) && !empty($post['date_in'])){
            $date_in = strtotime($post['date_in']);
            $data['date']['data_start'] =  $post['date_in'];
        } else {
            $date_start = date('m/01/Y');
            $date_in = strtotime($date_start);
            $data['date']['data_start'] = $date_start;
        }
        if(isset($post['date_out']) && !empty($post['date_out'])){
            $date_out = strtotime($post['date_out']);
            $data['date']['date_end'] = $post['date_out'];
        } else {
            $data['date']['date_end'] = date('m/d/Y');
            $date_out = time();
        }
        $clicks = ClickCount::find()
            ->where(['in', 'polis_type', $post['polis']])
            ->andWhere(['between', 'date', $date_in, $date_out])
            ->asArray()
            ->all();
        $count_polis_click = [];
        if($clicks!=[]) {
            $start_day = mktime(0, 0, 0, date('m'), date('d', $date_out), date('Y'));
            $end_day = mktime(23, 59, 59, date('m'), date('d', $date_out), date('Y'));
            do{
                foreach ($clicks as $click) {
                    if($click['date'] > $start_day && $click['date'] < $end_day) {
                        if (!isset($count_polis_click[$click['polis_type']][$start_day])) {
                            $count_polis_click[$click['polis_type']][$start_day] = 1;
                        } else {
                            $count_polis_click[$click['polis_type']][$start_day]++;
                        }
                    }
                }
                $start_day = $start_day - 86400;
                $end_day = $end_day - 86400;
            } while($date_in < $end_day);

            if (isset($post['polis']['osago'])) {
                $data['polis']['osago'] = ['name' => 'ОСАГО'];
            }
            if (isset($post['polis']['travel'])) {
                $data['polis']['travel'] = ['name' => 'Путишествия'];
            }
            if (isset($post['polis']['live'])) {
                $data['polis']['live'] = ['name' => 'Жизнь и Здоровье'];
            }
            if (isset($post['polis']['realty'])) {
                $data['polis']['realty'] = ['name' => 'Недвижимость'];
            }
            if (isset($post['polis']['kasko'])) {
                $data['polis']['kasko'] = ['name' => 'КАСКО'];
            }
            foreach ($count_polis_click as $polis_id => $dates) {
                switch ($polis_id) {
                    case self::POLIS_TYPE_OSAGO:
                        foreach ($dates as $date => $count) {
                            $data['polis']['osago']['data'][] = [$date*1000, $count];
                        }
                        break;
                    case self::POLIS_TYPE_TRAVEL:
                        foreach ($dates as $date => $count) {
                            $data['polis']['travel']['data'][] = [$date*1000, $count];
                        }
                        break;
                    case self::POLIS_TYPE_LIVE:
                        foreach ($dates as $date => $count) {
                            $data['polis']['live']['data'][] = [$date*1000, $count];
                        }
                        break;
                    case self::POLIS_TYPE_REALTY:
                        foreach ($dates as $date => $count) {
                            $data['polis']['realty']['data'][] = [$date*1000, $count];
                        }
                        break;
                    case self::POLIS_TYPE_KASKO:
                        foreach ($dates as $date => $count) {
                            $data['polis']['kasko']['data'][] = [$date*1000, $count];
                        }
                        break;
                }
            }
            $polises = [];
            foreach ($data['polis'] as $polis) {
                $polises[] = $polis;
            }
            $data['polis'] = $polises;
        }
        return $data;
    }
}