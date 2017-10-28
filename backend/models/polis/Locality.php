<?php

namespace app\models\polis;

use Yii;

/**
 * This is the model class for table "department".
 *
 * @property integer $locality_id
 * @property string $name
 */
class Locality extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'locality';
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
            'locality_id' => 'Dep ID',
            'name' => 'Name',
        ];
    }
}
