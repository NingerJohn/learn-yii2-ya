<?php

namespace common\assets;

// use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class CommonAsset extends \yii\web\AssetBundle
{
    // public $basePath = '@webroot';
    // public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
