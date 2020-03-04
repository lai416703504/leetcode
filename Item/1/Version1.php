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
     * @param Integer[] $nums
     * @param Integer   $target
     *
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        for ($i = 0; $i <count($nums); $i++) {
            for ($j = count($nums)-1; $j > $i; $j--) {
                if($nums[$i]+$nums[$j] == $target){
                    break 2;
                }
            }
        }

        return [$i,$j];
    }
}