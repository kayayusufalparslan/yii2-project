<?php

namespace kayayusufalparslan\project\models;

use Yii;

/**
 * This is the model class for table "{{%companyOutgoing}}".
 *
 * @property int $id
 * @property int $incomeID
 * @property int $month
 * @property float $rent
 * @property float $bills
 * @property float $salaries
 * @property float $cleaning
 * @property float $repairs
 * @property float $taxes
 * @property float|null $other
 *
 * @property Companies $income
 */
class CompanyOutgoing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%companyOutgoing}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['incomeID', 'month', 'cleaning', 'repairs', 'taxes'], 'required'],
            [['incomeID', 'month'], 'integer'],
            [['rent', 'bills', 'salaries', 'cleaning', 'repairs', 'taxes', 'other'], 'number'],
            [['incomeID'], 'exist', 'skipOnError' => true, 'targetClass' => Companies::className(), 'targetAttribute' => ['incomeID' => 'companyID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'incomeID' => 'Company ID',
            'month' => 'Month',
            'rent' => 'Rent',
            'bills' => 'Bills',
            'salaries' => 'Salaries',
            'cleaning' => 'Cleaning',
            'repairs' => 'Repairs',
            'taxes' => 'Taxes',
            'other' => 'Other',
        ];
    }

    /**
     * Gets query for [[Income]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIncome()
    {
        return $this->hasOne(Companies::className(), ['companyID' => 'incomeID']);
    }
}
