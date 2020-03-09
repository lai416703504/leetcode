<?php
/**
 * author:lhj
 * email:416703504@qq.com
 * create: 2020/3/9 11:12
 **/

class Solution
{

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x)
    {
        $res = $x < 0 ? -intval(strrev($x)) : intval(strrev($x));
        if ($res >= pow(2, 31) - 1 || $res < pow(-2, 31)) $res = 0;
        return $res;
    }
}

$s = new Solution();
var_dump($s->reverse(123));