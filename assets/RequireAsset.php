<?php

namespace app\assets;

use yii\web\AssetBundle;

class RequireAsset extends AssetBundle 
{
	public $sourcePath = '@vendor/ajbdev/requirejs/';
    public $js = [
        'require.js'
    ];
}