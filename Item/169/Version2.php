<?php
/**
 * author:lhj
 * email:416703504@qq.com
 * create: 2020/3/13 9:16
 **/

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums)
    {
        $len  = count($nums);
        $arr  = [];
        $tlen = 0;
        for ($i = 0; $i < $len; $i++) {
            if ($tlen == 0 || $arr[$tlen - 1] == $nums[$i]) {
                $arr[$tlen] = $nums[$i];
                $tlen++;
            } else {
                $tlen--;
            }
        }

        return $arr[$tlen - 1];
    }
}

$s   = new Solution();
$res = $s->majorityElement([3,2,3]);
var_dump($res);