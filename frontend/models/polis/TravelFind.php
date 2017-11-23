<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 11/23/17
 * Time: 8:53 AM
 */

namespace app\models\polis;


use app\models\forms\FormData;

class TravelFind
{
    /**
     * @param $duration
     * @return int|string
     */
    public function findCategoryDuration($duration){
        $duration1 = 0;
        $duration2 = 0;
        $travel_durations = FormData::getTravelDurations();
        foreach($travel_durations as $key=>$travel_duration){
            if(($travel_duration - $duration) >= 0){
                $duration1 = $key;

                if($travel_durations[$duration1] <= $travel_durations[$duration2]){
                    $duration2 = $duration1;
                }
            }
        }
        $category_travel_duration =  $duration2;
        return $category_travel_duration;
    }

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