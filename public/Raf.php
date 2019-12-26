<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/12/26
 * Time: 11:51
 */

class Raf
{
    public function read()
    {
        $param = $_GET['book'];
        $num   = $_GET['num'];
        $count = $param * $num;
        return $count;
    }
}
