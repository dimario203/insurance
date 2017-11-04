<?php

namespace app\models\statistic;

use Yii;
use \app\models\polis\Region;

/**
 * This is the model class for table "click_count".
 *
 * @property integer $id
 * @property integer $polis_type
 * @property integer $date
 * @property integer $region_id
 *
 * @property Region $region
 */
class ClickCount extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'click_count';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['polis_type', 'date'], 'required'],
            [['polis_type', 'date', 'region_id'], 'integer'],
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
            'polis_type' => 'Polis Type',
            'date' => 'Date',
            'region_id' => 'Region ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(Region::className(), ['region_id' => 'region_id']);
    }
}
