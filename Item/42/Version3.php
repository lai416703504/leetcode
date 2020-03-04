<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2020/3/4
 * Time: 14:28
 */

/**
 * 第一个版本用的递归，第二个版本试试用栈是否可以完成 用栈的效率并没有提高
 **/
class Solution
{
    /**
     *
     * @param Integer[] $height
     *
     * @return Integer
     */
    function trap($height)
    {
        $max   = max($height);
        $key   = array_search($max, $height);
        $left  = array_slice($height, 0, $key);
        $right = array_slice($height, $key + 1);

        $stack = new SplStack();


        $area = 0;
        if (count($left) >= 2) {
            $stack->push($left);
        }
        if (count($right) >= 2) {
            $stack->push(array_reverse($right));
        }

        while (!$stack->isEmpty()) {
            $arr   = $stack->pop();
            $max   = max($arr);
            $count = count($arr);
            $key   = array_search($max, $arr);
            $l     = ($count - $key - 1);
            $area  += $max * $l;

            for ($i = $key + 1; $i < $count; $i++) {
                $area -= $arr[$i];
            }

            $left = array_slice($arr, 0, $key);
            if(count($left)>=2){
                $stack->push($left);
            }
        }


        return $area;
    }
}

//$s   = new Solution();
//$res = $s->trap([2,0,2]);
//var_dump($res);