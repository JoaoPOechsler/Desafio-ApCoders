<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inquilino".
 *
 * @property string $nome_inquilino
 * @property int|null $idade
 * @property string|null $sexo
 * @property string|null $telefone
 * @property string|null $email
 */
class InquilinoModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inquilino';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome_inquilino'], 'required'],
            [['idade'], 'integer'],
            [['sexo'], 'string'],
            [['nome_inquilino', 'telefone', 'email'], 'string', 'max' => 255],
            [['nome_inquilino'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nome_inquilino' => 'Nome',
            'idade' => 'Idade',
            'sexo' => 'Sexo',
            'telefone' => 'Telefone',
            'email' => 'Email',
        ];
    }
}
