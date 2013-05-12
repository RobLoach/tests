<?php

class ValidateTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        require_once('index.php');
    }

    /**
     * @dataProvider providerValidate
     */
    public function testValidate($input, $expected)
    {
        $result = validate($input);
        $this->assertEquals($expected, $result);
    }

    public function providerValidate()
    {
        $tests[] = array('([](<{}>))', true);
        $tests[] = array('({<)>}', false);
        $tests[] = array('()[]{}<>', true);
        $tests[] = array('(<>[]({}))', true);
        $tests[] = array('(<>[]({INVALID}))', false);
        $tests[] = array('[](<[]({})>)', true);

        return $tests;
    }
}
