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

    public function testRead()
    {
        $stack = [];
        $this->assertEquals(0, count($stack));
    }
}
