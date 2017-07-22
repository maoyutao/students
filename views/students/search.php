<?php
use yii\helpers\Html;
$this->title = 'Search';
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>
<script type="text/javascript" src="livesearch.js"></script>

<?=Html::beginForm('','post',['id'=>'form']);?>
name:<?php echo Html::input('text','name',$model->name,[onkeyup="showResult(this.value)"]);?>
id:<?php echo Html::input('text','id',$model->id,[onkeyup="showResult(this.value)"]); ?>
city:<?php echo Html::input('text','city',$model->city,[onkeyup="showResult(this.value)"]);?>
gender:<?php echo Html::input('text','gender',$model->gender,[onkeyup="showResult(this.value)"]);?>
<?=Html::endForm()?>
<div id='livesearch'></div>