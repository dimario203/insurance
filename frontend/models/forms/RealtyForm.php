<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 11/21/17
 * Time: 8:07 AM
 */

namespace app\models\forms;

use \yii\base\Model;

class RealtyForm extends  Model
{
    public $region;
    public $repair_price;
    public $lease;
    public $constraction_price;
    public $civil_resp;


    public function rules()
    {
        return [
            [['region', 'repair_price', 'lease'], 'required', 'message'=>'Поле не может быть пустым'],
            [['repair_price', 'lease', 'constraction_price', 'civil_resp'], 'integer'],
            [['constraction_price', 'civil_resp'], 'default', 'value'=>0 ],
            ['lease', 'default', 'value'=>0 ],
        ];
    }
}