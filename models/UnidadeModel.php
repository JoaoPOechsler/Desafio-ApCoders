<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unidade".
 *
 * @property string $unidade
 * @property string|null $propietario
 * @property string|null $condominio
 * @property string|null $endereco
 *
 * @property Despesa[] $despesas
 */
class UnidadeModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'unidade';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unidade'], 'required'],
            [['endereco'], 'string'],
            [['unidade', 'propietario', 'condominio'], 'string', 'max' => 255],
            [['unidade'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'unidade' => 'Unidade',
            'propietario' => 'Propietário',
            'condominio' => 'Condominio',
            'endereco' => 'Endereço',
        ];
    }

    /**
     * Gets query for [[Despesas]].
     *
     * @return \yii\db\ActiveQuery
     */
}
