<?php

namespace app\models\polis;

use Yii;

/**
 * This is the model class for table "realty".
 *
 * @property integer $id
 * @property integer $company_id
 * @property integer $region_id
 * @property integer $repair_price
 * @property integer $lease
 * @property integer $constraction_price
 * @property integer $civil_resp
 * @property integer $price
 *
 * @property Company $company
 * @property Region $region
 */
class Realty extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'realty';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_id', 'region_id', 'repair_price', 'lease'], 'required'],
            [['company_id', 'region_id', 'repair_price', 'lease', 'constraction_price', 'civil_resp', 'price'], 'integer'],
            [['company_id'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['company_id' => 'company_id']],
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
            'repair_price' => 'Repair Price',
            'lease' => 'Lease',
            'constraction_price' => 'Constraction Price',
            'civil_resp' => 'Civil Resp',
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
    public function getRegion()
    {
        return $this->hasOne(Region::className(), ['region_id' => 'region_id']);
    }
}
