<?php

namespace kayayusufalparslan\project\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use kayayusufalparslan\project\models\CompanyOutgoing;

/**
 * CompanyOutgoingSearch represents the model behind the search form of `kayayusufalparslan\project\models\CompanyOutgoing`.
 */
class CompanyOutgoingSearch extends CompanyOutgoing
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'incomeID', 'month'], 'integer'],
            [['rent', 'bills', 'salaries', 'cleaning', 'repairs', 'taxes', 'other'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = CompanyOutgoing::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'incomeID' => $this->incomeID,
            'month' => $this->month,
            'rent' => $this->rent,
            'bills' => $this->bills,
            'salaries' => $this->salaries,
            'cleaning' => $this->cleaning,
            'repairs' => $this->repairs,
            'taxes' => $this->taxes,
            'other' => $this->other,
        ]);

        return $dataProvider;
    }
}
