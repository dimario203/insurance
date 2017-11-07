<?php

namespace app\models\polis;

use Yii;

/**
 * This is the model class for table "live".
 *
 * @property integer $id
 * @property integer $company_id
 * @property integer $age
 * @property integer $sum_insured
 * @property integer $work
 * @property integer $pay_hospital
 * @property integer $pay_surgery
 * @property integer $price
 *
 * @property Company $company
 */
class Live extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'live';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_id', 'age', 'sum_insured', 'work', 'pay_hospital', 'pay_surgery'], 'required'],
            [['company_id', 'age', 'sum_insured', 'work', 'pay_hospital', 'pay_surgery', 'price'], 'integer'],
            [['company_id'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['company_id' => 'company_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_id' => 'Company ID',
            'age' => 'Age',
            'sum_insured' => 'Sum Insured',
            'work' => 'Work',
            'pay_hospital' => 'Pay Hospital',
            'pay_surgery' => 'Pay Surgery',
            'price' => 'Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(Company::className(), ['company_id' => 'company_id']);
    }
}
