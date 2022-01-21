<?php

namespace app\controllers;

use app\models\InquilinoModel;
use app\models\InquilinoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InquilinoController implements the CRUD actions for InquilinoModel model.
 */
class InquilinoController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all InquilinoModel models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new InquilinoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single InquilinoModel model.
     * @param string $nome_inquilino Nome Inquilino
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($nome_inquilino)
    {
        return $this->render('view', [
            'model' => $this->findModel($nome_inquilino),
        ]);
    }

    /**
     * Creates a new InquilinoModel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new InquilinoModel();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'nome_inquilino' => $model->nome_inquilino]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing InquilinoModel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $nome_inquilino Nome Inquilino
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($nome_inquilino)
    {
        $model = $this->findModel($nome_inquilino);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'nome_inquilino' => $model->nome_inquilino]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing InquilinoModel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $nome_inquilino Nome Inquilino
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($nome_inquilino)
    {
        $this->findModel($nome_inquilino)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the InquilinoModel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $nome_inquilino Nome Inquilino
     * @return InquilinoModel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($nome_inquilino)
    {
        if (($model = InquilinoModel::findOne(['nome_inquilino' => $nome_inquilino])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
