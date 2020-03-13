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
        sort($nums);
        return $nums[count($nums)/2];
    }
}

$s   = new Solution();
$res = $s->majorityElement([3,2,3]);
var_dump($res);