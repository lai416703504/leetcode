<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2020/3/5
 * Time: 17:32
 */

class Solution
{

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     *
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2)
    {
        $nums3 = array_merge($nums1, $nums2);
        sort($nums3);
        $count = count($nums3);

        $max = intval($count / 2);
        $min = intval(($count - 1) / 2);

        return ($nums3[$max] + $nums3[$min]) / 2;
    }
}

$s = new Solution();
$s->findMedianSortedArrays([1, 3], [2]);