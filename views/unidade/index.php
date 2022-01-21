<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UnidadeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Unidades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unidade-model-index">

    <h1 style="margin-top: 36px;"><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Cadastrar Unidade', ['create'], ['class' => 'btn bg-btn']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'summary' => "",
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'unidade',
            'propietario',
            'condominio',
            'endereco:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, app\models\UnidadeModel $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'unidade' => $model->unidade]);
                 }
            ],
        ],
    ]); ?>

    <p>
        
    </p>

    <style>
        body {
            background: rgb(127,58,205);
            background: linear-gradient(0deg, rgba(127,58,205,1) 0%, rgba(255,255,255,1) 44%, rgba(255,255,255,1) 100%, rgba(255,255,255,1) 100%);
        }

    </style>

</div>
