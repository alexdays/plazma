<?php
namespace app\assets;

use yii\web\AssetBundle;

class YUIAsset extends AssetBundle 
{
	public $sourcePath = '@vendor/bower/yui';
	public $js = [
		'build/yui/yui.js'
	];
}