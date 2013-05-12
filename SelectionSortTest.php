<?php

class SelectionSortTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        require_once('index.php');
    }

    /**
     * @dataProvider providerSelectionSort
     */
    public function testSelectionSort($input)
    {
        $result = selectionSort($input);
        sort($input);
        $this->assertEquals($input, $result);
    }

    public function providerSelectionSort()
    {
        $tests[] = array(array(5, 3, 2, 0, 1));
        $tests[] = array(array(6, 3, 2, 5, 1, 4));
        $tests[] = array(array(5353,2523,7,64,3656));

        return $tests;
    }
}
