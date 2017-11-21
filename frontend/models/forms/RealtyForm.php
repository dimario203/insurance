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
    public $price_repair;
    public $lease;


    public function rules()
    {
        return [
            [['region', 'price_repair', 'lease'], 'required', 'message'=>'Поле не может быть пустым'],
        ];
    }
}