<?php

namespace app\models\polis;

use Yii;

/**
 * This is the model class for table "osago".
 *
 * @property integer $id
 * @property integer $company_id
 * @property integer $region_id
 * @property integer $power
 * @property integer $age
 * @property integer $experience
 * @property integer $price
 *
 * @property Region $region
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
            [['company_id', 'region_id', 'power', 'age', 'experience'], 'required'],
            [['company_id', 'region_id', 'power', 'age', 'experience', 'price'], 'integer'],
            [['region_id'], 'exist', 'skipOnError' => true, 'targetClass' => Region::className(), 'targetAttribute' => ['region_id' => 'region_id']],
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
            'region_id' => 'Region ID',
            'power' => 'Power',
            'age' => 'Age',
            'experience' => 'Experience',
            'price' => 'Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(Region::className(), ['region_id' => 'region_id']);
    }

    public function getCompany()
    {
        return $this->hasOne(Company::className(), ['company_id' => 'company_id']);
    }
}
