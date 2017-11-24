<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 11/23/17
 * Time: 6:54 PM
 */

namespace app\models\travel;

use yii\helpers\ArrayHelper;

class GetAditionalPayd
{
    public static function getTypesAdditionalPayd(){
        $result = TypeAdditionalPaid::find()->asArray()->all();
        $result = ArrayHelper::map($result, 'paid_id', 'name');
        return $result;
    }
}