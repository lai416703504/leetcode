<?php
/**
 * author:lhj
 * email:416703504@qq.com
 * create: 2020/3/20 9:36
 **/

class Solution
{

    /**
     * @param Integer[] $arr
     * @param Integer $k
     * @return Integer[]
     */
    function getLeastNumbers($arr, $k)
    {
        $minArr = [];
        while (count($minArr) < $k) {
            $min = min($arr);
            $minArr[] =$min;
            $key = array_search($min, $arr);
            unset($arr[$key]);
        }

        return $minArr;
    }
}

$s = new Solution();
$s->getLeastNumbers([4,5,1,6,2,7,3,8],4);