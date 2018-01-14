<?php
/**
 * Yii bootstrap file for Poo Platform.
 *
 * @link http://poodev.github.io
 * @copyright Copyright (c) 2017 Mpu Technology
 * @license http://poodev.github.io/license/
 */

/**
 * Yii is a helper class serving common framework functionalities.
 * Has Yii class, we can customize/extend for Poo Platform.
 *  
 * @author Agus Suhartono <agus.suhartono@gmail.com>
 * @since 1.0
 */
class Yii extends \yii\BaseYii
{
}

spl_autoload_register(['Yii', 'autoload'], true, true);
Yii::$classMap = require(__DIR__ . '/../yiisoft/yii2/classes.php');
Yii::$container = new \poo\di\Container();
