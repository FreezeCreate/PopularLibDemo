<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/12/25
 * Time: 17:31
 */
header("content-Type: text/html; charset=utf-8");
require_once __DIR__.'/../vendor/autoload.php';

//require_once "libs/Mobile_Detect.php";
$detect = new Mobile_Detect();
if ($detect->isMobile()){
    echo '类型：手机<br>';
    if( $detect->isAndroidOS() ){
        echo 'OS：安卓<br>';
        echo '安卓版本：'.$detect->version('Android').'<br>';
        echo '浏览器等级：'.$detect->mobileGrade().'<br>';
        if ($detect->is('Chrome')){
            echo 'Chrome浏览器<br>';
        }
    }
//    $detect->isAndroidOS();
}
echo $detect->setUserAgent();
