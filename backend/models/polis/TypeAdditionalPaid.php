<?php

namespace app\models\polis;

use Yii;

/**
 * This is the model class for table "type_additional_paid".
 *
 * @property integer $paid_id
 * @property string $name
 * @property string $description
 *
 * @property AdditionalPaid[] $additionalPas
 */
class TypeAdditionalPaid extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'type_additional_paid';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'paid_id' => 'Paid ID',
            'name' => 'Name',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdditionalPas()
    {
        return $this->hasMany(AdditionalPaid::className(), ['paid_id' => 'paid_id']);
    }
}
