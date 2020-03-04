<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2020/3/4
 * Time: 14:28
 */

/**
 * 这里是想到和快排的思路，用了递归，虽然通过了，但是效率不行 看到函数命名为leftRec
 * // 本来就像将分成 左边部分和右边部分 后面发现右边部分反转后和左边部分是一样的就放弃了rightRec方法
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

        $area = 0;
        if (count($left) >= 2) {
            $area += $this->leftRec($left);
        }
        if (count($right) >= 2) {
            $area += $this->leftRec(array_reverse($right));
        }


        return $area;
    }

    public function leftRec($height)
    {
        $count = count($height);
        $max   = max($height);
        $key   = array_search($max, $height);
        $l     = ($count - $key - 1);

        $area = $max * $l;
        for ($i = $key + 1; $i < $count; $i++) {
            $area -= $height[$i];
        }

        $left = array_slice($height, 0, $key);
        if (count($left) >= 2) {
            $area += $this->leftRec($left);
        }

        return $area;
    }
}

//$s   = new Solution();
//$res = $s->trap([6,4,2,0,3,2,0,3,1,4,5,3,2,7,5,3,0,1,2,1,3,4,6,8,1,3]);
//var_dump($res);