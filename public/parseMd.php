<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/12/25
 * Time: 17:31
 */

require_once __DIR__.'/../vendor/autoload.php';

$myFile = fopen("../README.md", "r") or die("Unable to open file!");
$pd     = new Parsedown();
$md_str = fread($myFile,filesize("../README.md"));
echo $pd->text($md_str);    //读取md文件输出
fclose($myFile);

//$pd = new Parsedown();
//echo $pd->text('Hello _Parsedown_!'); # prints: <p>Hello <em>Parsedown</em>!</p>
