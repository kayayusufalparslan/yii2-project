<?php

namespace kayayusufalparslan\project\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use kayayusufalparslan\project\models\Companies;

/**
 * CompaniesSearch represents the model behind the search form of `kayayusufalparslan\project\models\Companies`.
 */
class CompaniesSearch extends Companies
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['companyID', 'companyPhone', 'employees', 'payment'], 'integer'],
            [['companyName', 'companyLocation', 'companyEmail', 'note'], 'safe'],
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
        $query = Companies::find();

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
            'companyID' => $this->companyID,
            'companyPhone' => $this->companyPhone,
            'employees' => $this->employees,
            'payment' => $this->payment,
        ]);

        $query->andFilterWhere(['like', 'companyName', $this->companyName])
            ->andFilterWhere(['like', 'companyLocation', $this->companyLocation])
            ->andFilterWhere(['like', 'companyEmail', $this->companyEmail])
            ->andFilterWhere(['like', 'note', $this->note]);

        return $dataProvider;
    }
}
