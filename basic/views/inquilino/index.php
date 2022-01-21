<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InquilinoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inquilinos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inquilino-model-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'summary' => "",
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nome_inquilino',
            'idade',
            'sexo',
            'telefone',
            'email:email',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, app\models\InquilinoModel $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nome_inquilino' => $model->nome_inquilino]);
                 }
            ],
        ],
    ]); ?>

    <p>
        <?= Html::a('Cadastrar Inquilino', ['create'], ['class' => 'btn btn-outline-success float-end']) ?>
    </p>

    <style>
        svg {
            color: #198754;
        }

        th a{
            color: #198754;
        }

        li a{
            color: #198754;
        }

        td a{
            color: #212529;
        }

    </style>


</div>
