<?php

$yii = dirname(__FILE__) .'/../yii/framework/yii.php';
$config = dirname(__FILE__) .'/protected/config/main.php';
require_once($yii);

defined('YII_DEBUG') or define('YII_DEBUG', true);

$webapp = Yii::createWebApplication($config);
$webapp->run();
