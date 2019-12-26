<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/12/26
 * Time: 11:51
 */

class Raf
{
    public function read($data)
    {
        if (is_array($data)){
            $data = implode('', $data);
        }
        return $data;
    }
}
