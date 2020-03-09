<?php
/**
 * author:lhj
 * email:416703504@qq.com
 * create: 2020/3/9 10:35
 **/


class Solution
{

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices)
    {
        $maxRes = 0;
        $temp   = $prices;
        while (!empty($temp)) {
            $max    = max($temp);
            $maxKey = array_search($max, $temp);
            $arr    = array_slice($temp, 0, $maxKey+1);
            $min    = min($arr);
            if ($maxRes < $max - $min) {
                $maxRes = $max - $min;
            }
            $temp = array_values(array_slice($temp, $maxKey+1));
        }
        return $maxRes;
    }
}

$s = new Solution();
$s = $s->maxProfit([7, 1, 5, 3, 6, 4]);
//$s = $s->maxProfit([7, 6, 4, 3, 1]);
var_dump($s);