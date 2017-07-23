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
		$nameErr = $idErr = "";

		if(Yii::$app->request->post())
		{
        	if(Yii::$app->request->post('name'))
        		$model->name=Yii::$app->request->post('name');
     	    else 
     	   		$nameErr='name is required';
     	    if(Yii::$app->request->post('id'))
    	    	$model->id=Yii::$app->request->post('id');
     	    else
      	  		$idErr='id is required';
     	    $model->city=Yii::$app->request->post('city');
      	    $model->gender=Yii::$app->request->post('gender');
      	}
      	if($model->save())
    		return $this->redirect(['index']);
	    else
     	    return $this->render('update', [
            'model' => $model,
            'nameErr'=>$nameErr,
            'idErr'=>$idErr,
        ]);
        
        
	}

	public function actionDelete($id)
	{
		Students::findOne($id)->delete();
		return $this->redirect(['index']);
	}

	public function actionUpdate($id)
	{
		$model=Students::findOne($id);
		$nameErr = $idErr= "";

		if(Yii::$app->request->post())
		{
        	if(Yii::$app->request->post('name'))
        		$model->name=Yii::$app->request->post('name');
     	    else 
     	   		$nameErr='name is required';
     	    if(Yii::$app->request->post('id'))
    	    	$model->id=Yii::$app->request->post('id');
     	    else
      	  		$idErr='id is required';
     	    $model->city=Yii::$app->request->post('city');
      	    $model->gender=Yii::$app->request->post('gender');
      	}
      	if($model->save())
    		return $this->redirect(['index']);
	    else
     	    return $this->render('update', [
            'model' => $model,
            'nameErr'=>$nameErr,
            'idErr'=>$idErr,
        ]);
	}

	public function actionSearch()
	{
		$model = new Students();

		if (Yii::$app->request->post())
		{
            $model->name=Yii::$app->request->post('name');
            $model->id=Yii::$app->request->post('id');
            $model->city=Yii::$app->request->post('city');
            $model->gender=Yii::$app->request->post('gender');
        }


		$students = Students::findBySql("SELECT * FROM students WHERE name LIKE '$model->name%' AND id LIKE '$model->id%' AND city LIKE '$model->city%' AND gender LIKE '$model->gender%'")->all();
        return $this->render('search',[
        	'students'=>$students,
        	'model'=>$model,
        	]);
	}
	


}