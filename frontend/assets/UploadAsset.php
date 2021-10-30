<?php
namespace frontend\assets;


use yii\web\AssetBundle;

class UploadAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
        'js/dropzone.js',
        'js/dropzoneInit.js',
    ];
}