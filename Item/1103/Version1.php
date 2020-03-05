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
        while($candies){
            if($candies-$i>=0){
                $candies -= $i;
                $arr[(($i-1)%$num_people)] += $i++;
            }else{
                $arr[(($i-1)%$num_people)] += $candies;
                $candies = 0;
            }
        }

        return $arr;
    }
}