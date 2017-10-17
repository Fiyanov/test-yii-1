<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/vendor/yiisoft/yii/framework/yii.php';
$config=dirname(__FILE__).'/config/main.php';

// remove the following line when in production mode
// defined('YII_DEBUG') or define('YII_DEBUG',true);

require_once($yii);
Yii::createWebApplication($config)->run();

Yii::app()->clientScript->registerCssFile(
    Yii::app()->assetManager->publish(
        Yii::getPathOfAlias('application.vendor.twbs.bootstrap.dist.css').'/bootstrap.css'
    )
);

Yii::app()->clientScript->registerCssFile(
    Yii::app()->assetManager->publish(
        Yii::getPathOfAlias('application.vendor.twbs.bootstrap.dist.css').'/bootstrap-theme.css'
    )
);

Yii::app()->clientScript->registerCssFile(
    Yii::app()->assetManager->publish(
        Yii::getPathOfAlias('application.css').'/main.css'
    )
);