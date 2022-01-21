<?php

use app\models\UnidadeModel;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use \yii\db\ActiveQuery;

/* @var $this yii\web\View */
/* @var $model app\models\DespesaModel */
/* @var $form yii\widgets\ActiveForm */


//<?=$form->field($model, 'unidade_unidade')->dropDownList($unidadesList) ?>


<div class="despesa-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>
    
    <?=$form->field($model, 'unidade_unidade')->dropDownList(
        ArrayHelper::map(UnidadeModel::find()->all(),'unidade', 'unidade','unidade_unidade'))
    ?>

    <?= $form->field($model, 'tipo_despesa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valor')->textInput() ?>

    <?= $form->field($model, 'vencimento_da_fatura')->dropDownList([ 'Em-dia' => 'Em-dia', 'Vencida' => 'Vencida', ],) ?>

    <?= $form->field($model, 'status_pagamento')->dropDownList([ 'Aguardando' => 'Aguardando', 'Pago' => 'Pago', ],) ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
