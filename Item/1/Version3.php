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
        foreach ($nums as $k => $v) {
            $found = $target - $v;
            $temp  = $nums;
            unset($temp[$k]);
            if(in_array($found,$temp)){
                foreach ($temp as $key=>$val){
                    if($val==$found){
                        break 2;
                    }
                }
            }
        }

        return [$k, $key];
    }
}