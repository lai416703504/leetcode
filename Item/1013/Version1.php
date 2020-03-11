<?php
/**
 * author:lhj
 * email:416703504@qq.com
 * create: 2020/3/11 10:03
 **/

class Solution
{

    /**
     * @param Integer[] $A
     * @return Boolean
     */
    function canThreePartsEqualSum($A)
    {
//        $l    = 0;
//        $r    = count($A) - 1;
        $sum = array_sum($A);
        if ($sum % 3 != 0) {
            return false;
        }
        $avg = $sum / 3;
        $len = count($A);

        $l    = 0;
        $r    = $len - 1;
        $lSum = $A[$l];
        $rSum = $A[$r];
        while ($l + 1 < $r) {
            if ($lSum == $avg && $rSum == $avg) {
                return true;
            }

            if ($lSum != $avg) {
                $lSum+=$A[++$l];
            }

            if($rSum!=$avg){
                $rSum+=$A[--$r];
            }
        }

        return false;
    }
}

$s     = new Solution();
$res   = $s->canThreePartsEqualSum([1,-1,-1,1]);
var_dump($res);