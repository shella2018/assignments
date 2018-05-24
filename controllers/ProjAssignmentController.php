<?php

namespace app\controllers;

use Yii;
use app\models\ProjAssignment;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;

class ProjAssignmentController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }


    public function actionCreate()
    {
         $model = new ProjAssignment();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);

    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);


        return $this->render('delete');
    }

    public function actionIndex()
    {
        $projassignment = projassignment::find()->orderBy('person_id')->all();

        return $this->render('index', compact('projassignment'));


        return $this->render('index');
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);


      }
    protected function findModel($id)
    {
        if (($model = ProjAssignment::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}