<?php
namespace app\controllers;

use yii;
use yii\web\Controller;
use app\models\Students;
use yii\filters\VerbFilter;

class StudentsController extends Controller
{
	public function actionIndex()
	{
		$query = Students::find();
		$students = $query->orderBy('id')->all();
        return $this->render('index',[
        	'students'=>$students,
        	]);
	}

	public function actionCreate()
	{
		$model = new Students();

		if ($model->load(Yii::$app->request->post(),' ') && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
	}

	public function actionDelete($id)
	{
		Students::findOne($id)->delete();
		return $this->redirect(['index']);
	}

	public function actionUpdate($id)
	{
		$model=Students::findOne($id);

		if ($model->load(Yii::$app->request->post(),' ') && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
	}

	public function actionSearch()
	{
		$query = Students::find();
		$students = $query->orderBy('id')->all();
        return $this->render('search',[
        	'students'=>$students,
        	]);
	}
	


}