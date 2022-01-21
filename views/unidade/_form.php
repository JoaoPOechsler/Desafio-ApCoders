<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UnidadeModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="unidade-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'unidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'propietario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'condominio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'endereco')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
