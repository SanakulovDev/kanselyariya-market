<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';   
    public $baseUrl = '@web';
    public $css = [
        // 'css/site.css',
        "css/bootstrap.min.css" ,
        "css/slick.css",
        "css/theme-color/default-theme.css",
        "css/style.css",
        "https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css",
        "https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800",
        "https://fonts.googleapis.com/css?family=Lato"
    ];
    public $js = [
        "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js",
        "js/bootstrap.min.js",
        "js/slick.min.js",
        "js/counter.js",
        "js/app.js",
        "js/custom.js"
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap4\BootstrapAsset',
    ];
}
