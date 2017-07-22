<?php
use yii\helpers\Html;
$this->title = 'Students';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?php echo Html::encode($this->title)?></h1>

<p><?php echo Html::a('create',['create'],['class' => 'btn btn-success'])?>

<?php echo Html::a('search',['search'],['class' => 'btn btn-success'])?></p>

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