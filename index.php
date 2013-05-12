<?php

/**
 * @file
 * A random suite of problem solving.
 */

/**
 * Retrieve the factorial value of the given number.
 */
function factorial($number) {
    return $number <= 1 ? $number : $number * factorial($number - 1);
}

/**
 * A selection sort function.
 */
function selectionSort($array, $i = 0) {
    if ($i >= sizeof($array)) {
        return $array;
    }
    foreach ($array as $index => $value) {
        if ($array[$i] < $array[$index]) {
            $old = $array[$index];
            $array[$index] = $array[$i];
            $array[$i] = $old;
        }
    }
    return selectionSort($array, $i + 1);
}

/**
 * Check whether the given string has valid open/close brackets.
 */
function validate($str) {
    $brackets = array(
        '(' => ')',
        '[' => ']',
        '<' => '>',
        '{' => '}',
    );
    $stack = array();
    for ($i = 0; $i < strlen($str); $i++) {
        $bracket = $str[$i];
        // Check if it's an open bracket.
        if (isset($brackets[$bracket])) {
            $stack[] = $bracket;
        }
        else {
            // It's a close bracket, so pop the last off the stack, and make
            // sure it matches the open one at the end of the stack.
            $open = array_pop($stack);
            if ($brackets[$open] != $bracket) {
                return false;
            }
        }
    }

    // At the end, the stack should be empty.
    return empty($stack) ? true : false;
}
