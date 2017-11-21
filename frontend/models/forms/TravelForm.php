<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 11/21/17
 * Time: 8:07 AM
 */

namespace app\models\forms;

use \yii\base\Model;

class TravelForm extends  Model
{
    public $country;
    public $date_from;
    public $date_to;
    public $birth;


    public function rules()
    {
        return [
            [['$country', '$date_from', '$date_to', '$birth'], 'required'],
        ];
    }
}