<?php

namespace app\assets;

use yii\web\AssetBundle;

class DevAsset extends AssetBundle 
{
	public $sourcePath = '@app/protected';
    public $js = [
        'built.js'
    ];
}