<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\InquilinoModel */

$this->title = 'Editar Inquilino: ' . $model->nome_inquilino;
$this->params['breadcrumbs'][] = ['label' => 'Inquilinos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nome_inquilino, 'url' => ['view', 'nome_inquilino' => $model->nome_inquilino]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inquilino-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    <a href="http://localhost:8080/index.php?r=inquilino%2Findex" class="btn btn-danger float-start">Cancelar</a>

</div>
