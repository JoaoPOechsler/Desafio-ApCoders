<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "despesa".
 *
 * @property string $descricao
 * @property string $unidade_unidade
 * @property string|null $tipo_despesa
 * @property float|null $valor
 * @property string|null $vencimento_da_fatura
 * @property string|null $status_pagamento
 *
 * @property Unidade $unidadeUnidade
 */
class DespesaModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'despesa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {

        //'exist', 'skipOnError' => true, 'targetClass' => UnidadeModel::className(), 'targetAttribute' => ['unidade_unidade' => 'unidade']],
        return [
            [['descricao', 'unidade_unidade'], 'required'],
            [['valor'], 'number'],
            [['vencimento_da_fatura', 'status_pagamento'], 'string'],
            [['descricao', 'unidade_unidade', 'tipo_despesa'], 'string', 'max' => 255],
            [['descricao'], 'unique'],
            [['unidade_unidade'], 'exist', 'skipOnError' => true, 'targetClass' => UnidadeModel::className(), 'targetAttribute' => ['unidade_unidade' => 'unidade']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'descricao' => 'Descrição',
            'unidade_unidade' => 'Unidade',
            'tipo_despesa' => 'Tipo da Despesa',
            'valor' => 'Valor',
            'vencimento_da_fatura' => 'Vencimento Da Fatura',
            'status_pagamento' => 'Status Pagamento',
        ];
    }

    /**
     * Gets query for [[UnidadeUnidade]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUnidadeUnidade()
    {
        return $this->hasOne(UnidadeModel::className(), ['unidade' => 'unidade_unidade']);
    }
}
