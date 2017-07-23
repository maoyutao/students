<?php
use yii\helpers\Html;
$this->title = 'Search';
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>


<?=Html::beginForm('','post',['id'=>'form']);?>
name:<?php echo Html::input('text','name',$model->name,[]);?>
id:<?php echo Html::input('text','id',$model->id,[]); ?>
city:<?php echo Html::input('text','city',$model->city,[]);?>
gender:<?php echo Html::input('text','gender',$model->gender,[]);?>

<?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
<?=Html::endForm()?>

<table border='1' width='800'>
<tr>
<th>name</th>
<th>id</th>
<th>city</th>
<th>gender</th>
<th> </th>
</tr>
<?php foreach ($students as $student):?>
	<tr>
	<td>
	<?php echo Html::encode("$student->name")?>
	</td>
	<td>
	<?php echo Html::encode("$student->id")?>
	</td>
	<td>
	<?php echo Html::encode("$student->city")?>
	</td>
	<td>
	<?php echo Html::encode("$student->gender")?>
	</td>
	<td>
	<?php echo Html::a('delete',['delete','id'=>$student->id],['class' => 'btn btn-danger'])?>
	<?php echo Html::a('update',['update','id'=>$student->id],['class' => 'btn btn-primary'])?>
	</td>
	</tr>

<?php endforeach;?>
</table>
