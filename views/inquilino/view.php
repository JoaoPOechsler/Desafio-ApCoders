<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\InquilinoModel */

$this->title = $model->nome_inquilino;
$this->params['breadcrumbs'][] = ['label' => 'Inquilino Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="inquilino-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nome_inquilino',
            'idade',
            'sexo',
            'telefone',
            'email:email',
        ],
    ]) ?>

    <p>
        <?= Html::a('Editar', ['update', 'nome_inquilino' => $model->nome_inquilino], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Excluir', ['delete', 'nome_inquilino' => $model->nome_inquilino], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
