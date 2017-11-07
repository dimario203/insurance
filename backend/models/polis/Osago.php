<?php

namespace app\models\polis;

use Yii;

/**
 * This is the model class for table "osago".
 *
 * @property integer $id
 * @property integer $comp_id
 * @property integer $reg_id
 * @property integer $power
 * @property integer $age
 * @property integer $experience
 * @property integer $price
 */
class Osago extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'osago';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comp_id', 'reg_id', 'power', 'age', 'experience'], 'required'],
            [['comp_id', 'reg_id', 'power', 'age', 'experience', 'price'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'comp_id' => 'Comp ID',
            'reg_id' => 'Reg ID',
            'power' => 'Power',
            'age' => 'Age',
            'experience' => 'Experience',
            'price' => 'Price',
        ];
    }
}
