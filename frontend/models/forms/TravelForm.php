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
    public $travel_accident = [];
    public $civil_responsibility;
    public $summ;
    public $additional_payd;


    public function rules()
    {
        return [
            [['country', 'date_from', 'date_to', 'birth'], 'required', 'message'=>'Поле не может быть пустым'],
            [['travel_accident', 'civil_responsibility'], 'default', 'value'=>0 ],
            ['summ', 'default', 'value'=>1 ],
            ['additional_payd', 'each', 'rule' => ['integer']],
        ];
    }
}