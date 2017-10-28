<?php

namespace app\models\polis;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property integer $country_id
 * @property string $name
 *
 * @property CivilResponsibility[] $civilResponsibilities
 * @property Travel[] $travels
 * @property TravelAccident[] $travelAccidents
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'country_id' => 'Country ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCivilResponsibilities()
    {
        return $this->hasMany(CivilResponsibility::className(), ['country_id' => 'country_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTravels()
    {
        return $this->hasMany(Travel::className(), ['country_id' => 'country_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTravelAccidents()
    {
        return $this->hasMany(TravelAccident::className(), ['country_id' => 'country_id']);
    }
}
