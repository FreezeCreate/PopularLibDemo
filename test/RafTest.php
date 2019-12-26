<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/12/26
 * Time: 11:53
 */
use PHPUnit\Framework\TestCase;
class RafTest extends TestCase
{
    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);
        return $stack;
    }

    /**
     * 测试是否为数字
     * @Author: Ferre
     * @create: 2019/12/26 16:27
     */
    public function testRead()
    {
        $raf = new Raf();
        $this->assertEquals(true, is_numeric($raf->read([1,2,3]))); //测试是否为数字
    }
}
