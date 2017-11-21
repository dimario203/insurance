<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 11/21/17
 * Time: 8:07 AM
 */

namespace app\models\forms;

use \yii\base\Model;

class LiveForm extends  Model
{
    public $age;
    public $summa;
    public $worked;


    public function rules()
    {
        return [
            [['age', 'summa'], 'required', 'message'=>'Поле не может быть пустым'],
        ];
    }
}