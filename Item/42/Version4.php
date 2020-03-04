<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2020/3/4
 * Time: 14:28
 */

/**
 * 大神解法，还是快排
 **/
class Solution
{
    /**
     * @param Integer[] $height
     * @return Integer
     */
    function trap($height) {
        $ans = 0;
        if (empty($height)) return $ans;
        $len = count($height);
        $left = 0; $right = $len -1;
        $maxLeft = 0;
        $maxRight = 0;
        while($left < $right) {
            echo "left:$left-right:$right-area:$ans",PHP_EOL;
            if ($height[$left] < $height[$right]) {
                echo "left:maxLeft:$maxLeft-height[left]:{$height[$left]}",PHP_EOL;
                ($height[$left] > $maxLeft) ?
                    ($maxLeft = $height[$left]) : ($ans += $maxLeft - $height[$left]);
                $left++;
            } else {
                echo "right:maxright:$maxRight-height[right]:{$height[$right]}",PHP_EOL;
                ($height[$right] > $maxRight) ?
                    ($maxRight = $height[$right]) : ($ans += $maxRight - $height[$right]);
                $right--;
            }
        }
        return $ans;
    }
}

$s   = new Solution();
$res = $s->trap([0,1,0,2,1,0,1,3,2,1,2,1]);
var_dump($res);