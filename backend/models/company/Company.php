<?php

namespace app\models\company;

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
}
