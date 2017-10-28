<?php

namespace app\models\polis;

use Yii;

/**
 * This is the model class for table "region".
 *
 * @property integer $region_id
 * @property string $name
 * @property integer $locality_id
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
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'region_id' => 'Reg ID',
            'name' => 'Name',
            'locality_id' => 'Dep ID',
        ];
    }
}
