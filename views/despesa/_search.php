<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DespesaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="despesa-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'descricao') ?>

    <?= $form->field($model, 'unidade_unidade') ?>

    <?= $form->field($model, 'tipo_despesa') ?>

    <?= $form->field($model, 'valor') ?>

    <?= $form->field($model, 'vencimento_da_fatura') ?>

    <?php // echo $form->field($model, 'status_pagamento') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
