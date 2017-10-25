<?php

namespace app\models\company;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property integer $comp_id
 * @property string $name
 * @property string $url
 * @property string $phone
 * @property integer $commission
 * @property string $logo
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
            [['commission'], 'integer', 'max'=>11],
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
            'comp_id' => Yii::t('app', 'Comp Id'),
            'name' => Yii::t('app', 'Name'),
            'url' => Yii::t('app', 'Url'),
            'phone' => Yii::t('app', 'Phone'),
            'commission' => Yii::t('app', 'Commission'),
            'logo' => Yii::t('app', 'Logo'),
        ];
    }
}
