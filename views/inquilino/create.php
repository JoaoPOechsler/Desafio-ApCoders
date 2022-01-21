<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\InquilinoModel */

$this->title = 'Cadastrar Inquilino';
$this->params['breadcrumbs'][] = ['label' => 'Inquilinos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inquilino-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    <a href="http://localhost:8080/index.php?r=inquilino%2Findex" class="btn btn-danger float-start">Cancelar</a>

</div>
