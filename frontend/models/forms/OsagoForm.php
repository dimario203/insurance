<?php
namespace app\models\forms;

use \yii\base\Model;

class OsagoForm extends  Model
{
    public $power;
    public $region;
    public $min_age;
    public $experience;


    public function rules()
    {
        return [
            [['power', 'region', 'min_age', 'experience'], 'required', 'message'=>'Поле не может быть пустым'],
        ];
    }
}