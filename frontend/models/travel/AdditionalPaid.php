<?php

namespace app\models\travel;

use Yii;

/**
 * This is the model class for table "additional_paid".
 *
 * @property integer $id
 * @property integer $company_id
 * @property integer $paid_id
 * @property integer $price
 *
 * @property Company $company
 * @property TypeAdditionalPaid $paid
 */
class AdditionalPaid extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'additional_paid';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_id', 'paid_id'], 'required'],
            [['company_id', 'paid_id', 'price'], 'integer'],
            [['company_id'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['company_id' => 'company_id']],
            [['paid_id'], 'exist', 'skipOnError' => true, 'targetClass' => TypeAdditionalPaid::className(), 'targetAttribute' => ['paid_id' => 'paid_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_id' => 'Company ID',
            'paid_id' => 'Paid ID',
            'price' => 'Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(Company::className(), ['company_id' => 'company_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaid()
    {
        return $this->hasOne(TypeAdditionalPaid::className(), ['paid_id' => 'paid_id']);
    }
}
