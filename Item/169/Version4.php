<?php
/**
 * author:lhj
 * email:416703504@qq.com
 * create: 2020/3/13 9:16
 **/

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums)
    {
        return $this->majorityElementRec($nums, 0, count($nums) - 1);
    }

    private function majorityElementRec($nums, $lo, $hi)
    {
        if ($lo == $hi) {
            return $nums[$lo];
        }

        $mid           = intval(($lo + $hi) / 2);
        $leftMajority  = $this->majorityElementRec($nums, $lo, $mid);
        $rightMajority = $this->majorityElementRec($nums, $mid + 1, $hi);
        if ($this->countInRange($nums, $leftMajority, $lo, $hi) > ($hi - $lo + 1) / 2) {
            return $leftMajority;
        }
        if ($this->countInRange($nums, $rightMajority, $lo, $hi) > ($hi - $lo + 1) / 2) {
            return $rightMajority;
        }
        return -1;
    }

    private function countInRange($nums, $target, $lo, $hi)
    {
        $count = 0;
        for ($i = $lo; $i <= $hi; $i++) {
            if ($nums[$i] == $target) {
                ++$count;
            }
        }
        return $count;
    }

}

$s   = new Solution();
$res = $s->majorityElement([3, 2, 3]);
var_dump($res);