<?php

namespace app\models\polis;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property integer $company_id
 * @property string $name
 * @property string $url
 * @property string $phone
 * @property integer $commission
 * @property string $logo
 * @property integer $visible
 *
 * @property AdditionalPaid[] $additionalPas
 * @property CivilResponsibility[] $civilResponsibilities
 * @property Live[] $lives
 * @property Realty[] $realties
 * @property Travel[] $travels
 * @property TravelAccident[] $travelAccidents
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['commission', 'visible'], 'integer'],
            [['name', 'url', 'logo'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'company_id' => 'Company ID',
            'name' => 'Name',
            'url' => 'Url',
            'phone' => 'Phone',
            'commission' => 'Commission',
            'logo' => 'Logo',
            'visible' => 'Visible',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdditionalPas()
    {
        return $this->hasMany(AdditionalPaid::className(), ['company_id' => 'company_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCivilResponsibilities()
    {
        return $this->hasMany(CivilResponsibility::className(), ['company_id' => 'company_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLives()
    {
        return $this->hasMany(Live::className(), ['company_id' => 'company_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRealties()
    {
        return $this->hasMany(Realty::className(), ['company_id' => 'company_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTravels()
    {
        return $this->hasMany(Travel::className(), ['company_id' => 'company_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTravelAccidents()
    {
        return $this->hasMany(TravelAccident::className(), ['company_id' => 'company_id']);
    }
}
