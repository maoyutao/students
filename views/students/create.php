<?php
use yii\helpers\Html;
$this->title = 'Create';
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>

<?= $this->render('form', [
    'model' => $model,  
    'nameErr'=>$nameErr,
    'idErr'=>$idErr,

]) ?>