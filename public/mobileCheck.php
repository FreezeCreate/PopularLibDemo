<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/12/25
 * Time: 17:31
 */

require_once __DIR__.'/../vendor/autoload.php';
//require_once "libs/Mobile_Detect.php";
$detect = new Mobile_Detect();
var_dump($detect->version('Android'));
var_dump($detect->setUserAgent());
