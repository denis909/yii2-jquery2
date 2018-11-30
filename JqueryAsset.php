<?php

namespace yii\web;

class JqueryAsset extends AssetBundle
{

	public $sourcePath = '@vendor/denis909/yii2-jquery2/assets';

	public $jsOptions = ['position' => \yii\web\View::POS_HEAD];

	public $js = [
		'jquery-2.2.4.min.js'
	];

}