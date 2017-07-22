<?php
namespace app\controllers;

use yii\web\Controller;
use app\models\Students;

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
}