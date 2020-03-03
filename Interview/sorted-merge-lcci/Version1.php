<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2020/3/3
 * Time: 11:01
 */

class Solution
{

    /**
     * @param Integer[] $A
     * @param Integer   $m
     * @param Integer[] $B
     * @param Integer   $n
     *
     * @return NULL
     */
    function merge(&$A, $m, $B, $n)
    {
        array_splice($A, $m, $n, $B);
        sort($A);
    }
}