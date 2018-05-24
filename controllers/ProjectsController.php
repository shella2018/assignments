<?php

namespace app\controllers;

use Yii;
use app\models\Projects;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;


class ProjectsController extends \yii\web\Controller
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
         $model = new Projects();

        if ($model->load(Yii::$app->request->post()) && $model->save())
            {
                return $this->redirect(['view','id'=> $model->id]);
            }
        return $this->render('create', [
            'model' => $model,
        ]);
        
        return $this->render('create');
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionIndex()
    {
       $projects = Projects::find()->orderBy('project_name')->all();

        return $this->render('index', compact('projects'));
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
        if (($model = Projects::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}