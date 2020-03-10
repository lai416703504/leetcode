<?php

/**
 * author:lhj
 * email:416703504@qq.com
 * create: 2020/3/9 14:03
 **/
class Solution
{

    /**
     * @param String $str
     * @return Integer
     */
    function myAtoi($str)
    {
        if (stripos($str,'e')) {
            list($str, $b) = explode('e', $str);
        }
        $int = intval($str);
        if ($int >= pow(2, 31) - 1) {
            $int = 2147483647;
        } elseif ($int < -pow(2, 31)) {
            $int = -2147483648;
        }
        return $int;
    }
}

$s = new Solution();
$res = $s->myAtoi("   -115579378e25");
var_dump($res);
