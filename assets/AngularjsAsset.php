<?php

namespace app\assets;

use yii\web\AssetBundle;

class AngularjsAsset extends AssetBundle 
{
	public $sourcePath = '@vendor/bower';
    public $js = [
        'angular/angular.js',
        'angular-resource/angular-resource.js',
        'angular-route/angular-route.js',
        'angular-sanitize/angular-sanitize.js'
    ];
}