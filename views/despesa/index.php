<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\DespesaModel;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DespesaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lançamentos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="despesa-model-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cadastrar Despesa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'summary' => "",
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'descricao',
            'unidade_unidade',
            'tipo_despesa',
            'valor',
            'vencimento_da_fatura',
            //'status_pagamento',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DespesaModel $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'descricao' => $model->descricao]);
                 }
            ],
        ],
    ]); ?>

<style>
        svg {
            color: #198754;
        }

        path:hover {
            color: #212529;
        }

        th a{
            color: #198754;
        }

        li a{
            color: #198754;
        }

        a:hover{
            color: #212529;
        }

        td a{
            color: #212529;
        }

    </style>


</div>