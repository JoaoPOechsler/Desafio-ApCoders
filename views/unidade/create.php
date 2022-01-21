<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UnidadeModel */

$this->title = 'Cadastrar Unidade';
$this->params['breadcrumbs'][] = ['label' => 'Unidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unidade-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    <a href="http://localhost:8080/index.php?r=unidade%2Findex" class="btn btn-danger float-start">Cancelar</a>

</div>
