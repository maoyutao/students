<?php
use yii\helpers\Html;
?>

<?=Html::beginForm('','post',['id'=>'form']);?>
name:<?php echo Html::input('text','name',$model->name,[]);?>
<span class="error">* <?php echo $nameErr;?></span><br/>
id:<?php echo Html::input('text','id',$model->id,[]); ?>
<span class="error">* <?php echo $idErr;?></span><br/>
city:<?php echo Html::input('text','city',$model->city,[]);?><br/>
gender:<?php echo Html::input('text','gender',$model->gender,[]);?><br/>

<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
<?=Html::endForm()?>