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
     *
     *
     * @param Integer[] $nums
     * @param Integer   $target
     *
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        $flip = array_flip($nums);
        foreach ($nums as $key => $val) {
            $found = $flip[$target - $val] ?? false;
            if($found && $found!=$key){
                return [$key,$found];
            }
        }
    }
}

