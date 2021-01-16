<?php

namespace kayayusufalparslan\project\models;

use Yii;

/**
 * This is the model class for table "{{%companies}}".
 *
 * @property int $companyID
 * @property string $companyName
 * @property string $companyLocation
 * @property string $companyEmail
 * @property int $companyPhone
 * @property int $employees
 * @property int $payment
 * @property string|null $note
 *
 * @property CompanyOutgoing[] $companyOutgoings
 */
class Companies extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%companies}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['companyLocation', 'companyEmail', 'companyPhone', 'employees', 'payment'], 'required'],
            [['companyLocation', 'note'], 'string'],
            [['companyPhone', 'employees', 'payment'], 'integer'],
            [['companyName', 'companyEmail'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'companyID' => 'Company ID',
            'companyName' => 'Company Name',
            'companyLocation' => 'Company Location',
            'companyEmail' => 'Company Email',
            'companyPhone' => 'Company Phone',
            'employees' => 'Employees',
            'payment' => 'Payment',
            'note' => 'Note',
        ];
    }

    /**
     * Gets query for [[CompanyOutgoings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompanyOutgoings()
    {
        return $this->hasMany(CompanyOutgoing::className(), ['incomeID' => 'companyID']);
    }
}
