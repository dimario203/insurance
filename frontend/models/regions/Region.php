<?php

namespace app\models\regions;

use Yii;

/**
 * This is the model class for table "region".
 *
 * @property integer $region_id
 * @property string $name
 * @property integer $locality_id
 *
 * @property ClickCount[] $clickCounts
 * @property Osago[] $osagos
 * @property Realty[] $realties
 * @property Locality $locality
 */
class Region extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'region';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'locality_id'], 'required'],
            [['locality_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['locality_id'], 'exist', 'skipOnError' => true, 'targetClass' => Locality::className(), 'targetAttribute' => ['locality_id' => 'locality_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'region_id' => 'Region ID',
            'name' => 'Name',
            'locality_id' => 'Locality ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClickCounts()
    {
        return $this->hasMany(ClickCount::className(), ['region_id' => 'region_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOsagos()
    {
        return $this->hasMany(Osago::className(), ['region_id' => 'region_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRealties()
    {
        return $this->hasMany(Realty::className(), ['region_id' => 'region_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocality()
    {
        return $this->hasOne(Locality::className(), ['locality_id' => 'locality_id']);
    }
}
