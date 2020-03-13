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
        $candidate = -1;
        $count = 0;
        foreach ($nums as  $num) {
            if ($num == $candidate)
                ++$count;
            else if (--$count < 0) {
                $candidate = $num;

                $count = 1;
            }
        }
        return $candidate;
    }
}

$s   = new Solution();
$res = $s->majorityElement([1,2,1,2,1,2,1,2,2,2,1,5]);
var_dump($res);


