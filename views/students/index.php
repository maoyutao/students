<?php
use yii\helpers\Html;
?>
<h1>Students</h1>
<table border='1' width='800'>
<tr>
<th>name</th>
<th>id</th>
<th>city</th>
<th>gender</th>
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
	</tr>
<?php endforeach;?>
</table>