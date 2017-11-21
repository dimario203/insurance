<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 11/21/17
 * Time: 8:16 AM
 */

namespace app\models\travel;


use yii\helpers\ArrayHelper;

class GetCountry
{
    public static function get_Countries(){
        $result = [];
        $result = Country::find()->asArray()->all();
        $result = ArrayHelper::map($result, 'country_id', 'name');
        return $result;
    }
}