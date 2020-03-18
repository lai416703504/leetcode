<?php
/**
 * author:lhj
 * email:416703504@qq.com
 * create: 2020/3/18 10:03
 **/

class Solution
{

    /**
     * @param Integer[] $rec1
     * @param Integer[] $rec2
     * @return Boolean
     */
    function isRectangleOverlap($rec1, $rec2)
    {
        return !($rec1[2] <= $rec2[0] ||   // left
            $rec1[3] <= $rec2[1] ||   // bottom
            $rec1[0] >= $rec2[2] ||   // right
            $rec1[1] >= $rec2[3]);    // top


    }
}