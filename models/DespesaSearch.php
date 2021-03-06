<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DespesaModel;

/**
 * DespesaSearch represents the model behind the search form of `app\models\DespesaModel`.
 */
class DespesaSearch extends DespesaModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descricao', 'unidade_unidade', 'tipo_despesa', 'vencimento_da_fatura', 'status_pagamento'], 'safe'],
            [['valor'], 'number'],
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
        $query = DespesaModel::find();

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
            'valor' => $this->valor,
        ]);

        $query->andFilterWhere(['like', 'descricao', $this->descricao])
            ->andFilterWhere(['like', 'unidade_unidade', $this->unidade_unidade])
            ->andFilterWhere(['like', 'tipo_despesa', $this->tipo_despesa])
            ->andFilterWhere(['like', 'vencimento_da_fatura', $this->vencimento_da_fatura])
            ->andFilterWhere(['like', 'status_pagamento', $this->status_pagamento]);

        return $dataProvider;
    }
}
