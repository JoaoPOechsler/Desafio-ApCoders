<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UnidadeModel */

$this->title = 'Editar: ' . $model->unidade;
$this->params['breadcrumbs'][] = ['label' => 'Unidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->unidade, 'url' => ['view', 'unidade' => $model->unidade]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="unidade-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    <a href="http://localhost:8080/index.php?r=unidade%2Findex" class="btn btn-danger float-start">Cancelar</a>

</div>
