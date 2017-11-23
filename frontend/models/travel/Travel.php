<?php

namespace app\models\travel;

use app\models\polis\Company;
use Yii;

/**
 * This is the model class for table "travel".
 *
 * @property integer $id
 * @property integer $company_id
 * @property integer $country_id
 * @property integer $duration
 * @property integer $age
 * @property integer $sum_insured
 * @property integer $price
 *
 * @property Company $company
 * @property Country $country
 */
class Travel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'travel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_id', 'country_id', 'duration', 'age', 'sum_insured'], 'required'],
            [['company_id', 'country_id', 'duration', 'age', 'sum_insured', 'price'], 'integer'],
            [['company_id'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['company_id' => 'company_id']],
            [['country_id'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['country_id' => 'country_id']],
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
            'country_id' => 'Country ID',
            'duration' => 'Duration',
            'age' => 'Age',
            'sum_insured' => 'Sum Insured',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['country_id' => 'country_id']);
    }
}
