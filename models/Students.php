<?php
namespace app\models;
use yii\db\ActiveRecord;
class students extends ActiveRecord
{
	public function rules()
	{
		return [
		[['name','id','city','gender'],'required']
		];
	}
}
