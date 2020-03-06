<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2020/3/6
 * Time: 9:46
 */

class Solution
{

    /**
     * @param Integer $target
     *
     * @return Integer[][]
     */
    function findContinuousSequence($target)
    {
        $stack = new SplStack();
        $res   = [];

        for ($i = 1;$i <= round($target / 2) ; $i++) {
            $tempArr = [[$i]];
            while (!$stack->isEmpty()) {
                $temp   = $stack->pop();
                $temp[] = $i;
                if ($target == array_sum($temp)) {
                    $res[] = $temp;
                } elseif ($target > array_sum($temp)) {
                    $tempArr[] = $temp;
                }
            }

            foreach ($tempArr as $val) {
                $stack->push($val);
            }
        }

        return $res;
    }
}

$s = new Solution();
$res = $s->findContinuousSequence(9);
var_dump($res);