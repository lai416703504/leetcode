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
        $min    = reset($prices);
        $profit = 0;
        foreach ($prices as $val) {
            if ($val < $min) {
                $min = $val;
            }
            if ($val - $min > $profit) {
                $profit = $val - $min;
            }
        }

        return $profit;
    }
}

$s = new Solution();
//$s = $s->maxProfit([7, 1, 5, 3, 6, 4]);
$s = $s->maxProfit([7, 6, 4, 3, 1]);
var_dump($s);