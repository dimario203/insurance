<?php

namespace app\models\settings;

use Yii;

/**
 * This is the model class for table "site_settings".
 *
 * @property integer $id
 * @property integer $is_available
 * @property integer $find_all
 * @property integer $find_osago
 * @property integer $find_travel
 * @property integer $find_live
 * @property integer $find_realty
 * @property integer $find_kasko
 */
class SiteSettings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'site_settings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['is_available', 'find_all', 'find_osago', 'find_travel', 'find_live', 'find_realty', 'find_kasko'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'is_available' => 'Is Available',
            'find_all' => 'Find All',
            'find_osago' => 'Find Osago',
            'find_travel' => 'Find Travel',
            'find_live' => 'Find Live',
            'find_realty' => 'Find Realty',
            'find_kasko' => 'Find Kasko',
        ];
    }
}
