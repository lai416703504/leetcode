<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2020/3/4
 * Time: 11:08
 */

class Solution
{

    /**
     * 更慢了
     * @param Integer[] $nums
     * @param Integer   $target
     *
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        foreach ($nums as $k => $v) {
            $found = $target - $v;
            $temp  = $nums;
            unset($temp[$k]);
            $temp = array_flip($temp);
            if (isset($temp[$found])) {
                return [$k, $temp[$found]];
            }
        }
    }
}