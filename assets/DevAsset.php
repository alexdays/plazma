<?php

namespace app\assets;

use yii\web\AssetBundle;

class DevAsset extends AssetBundle 
{
	public $sourcePath = '@app/protected';
	public $css = [
		'css/styles.css'
	];
    public $js = [
        'js/dist/lib.js',
        'js/dist/main.js'
    ];
}