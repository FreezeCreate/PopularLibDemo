<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/12/25
 * Time: 17:31
 */

require_once __DIR__.'/../vendor/autoload.php';
$pd = new Parsedown();
echo $pd->text('Hello _Parsedown_!'); # prints: <p>Hello <em>Parsedown</em>!</p>
