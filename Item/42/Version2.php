<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2020/3/4
 * Time: 14:28
 */

/**
 * 第二个版本用栈但是效率没有提高 ，第三个版本试试链表 效率依然没有提高
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

        $linkedList = new SplDoublyLinkedList();


        $area = 0;
        if (count($left) >= 2) {
            $linkedList->push($left);
        }
        if (count($right) >= 2) {
            $linkedList->push(array_reverse($right));
        }

        while (!$linkedList->isEmpty()) {
            $arr   = $linkedList->pop();
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
                $linkedList->push($left);
            }
        }


        return $area;
    }
}

//$s   = new Solution();
//$res = $s->trap([2,0,2]);
//var_dump($res);