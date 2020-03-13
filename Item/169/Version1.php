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
        $a = array_count_values($nums);
        arsort($a);
        return key($a);
    }
}

$s = new Solution();
$res = $s->majorityElement([6,5,5]);
var_dump($res);