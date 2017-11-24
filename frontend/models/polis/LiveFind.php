<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 11/24/17
 * Time: 11:52 AM
 */

namespace app\models\polis;

use app\models\forms\FormData;

class LiveFind
{
    public function findAgeGroup($age){
        $age_groups = FormData::getTravelAgeGroups();
        foreach($age_groups as $key=>$group){
            if($age >= $group[0] && $age <= $group[1]){
                $travel_age_group = $key;
            }
        }
        return $travel_age_group;
    }

}