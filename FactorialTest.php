<?php

class FactorialTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        require_once('index.php');
    }

    /**
     * @dataProvider providerFactorial
     */
    public function testFactorial($input, $expected)
    {
        $result = factorial($input);
        $this->assertEquals($expected, $result);
    }

    public function providerFactorial()
    {
        $tests[] = array(1, 1);
        $tests[] = array(2, 2);
        $tests[] = array(5, 120);
        $tests[] = array(14, 87178291200);
        $tests[] = array(-4, -4);

        return $tests;
    }
}
