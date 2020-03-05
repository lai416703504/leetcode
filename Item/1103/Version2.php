<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2020/3/5
 * Time: 10:27
 */

class Solution {

    /**
     * @param Integer $candies
     * @param Integer $num_people
     * @return Integer[]
     */
    function distributeCandies($candies, $num_people) {
        $arr = array_fill(0,$num_people,0);
        $i = 1;
        $n = 0;
        while($candies){
            $i = min($candies,$i);
            $candies -= $i;
            $arr[$n++%$num_people] += $i++;
        }

        return $arr;
    }
}