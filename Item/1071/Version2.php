<?php
/**
 * author:lhj
 * email:416703504@qq.com
 * create: 2020/3/12 10:49
 **/

class Solution
{

    /**
     * @param String $str1
     * @param String $str2
     * @return String
     */
    function gcdOfStrings($str1, $str2)
    {
        $len1 = strlen($str1);
        $len2 = strlen($str2);
        $len  = $this->gcd($len1, $len2);
        $word = substr($str1, 0, $len);
        for ($i = 0; $i < max($len1, $len2); $i +=  $len) {
            if ($i < $len1 && $word != substr($str1, $i, $len)) {
                return '';
            }

            if($i<$len2 && $word != substr($str2, $i, $len)){
                return '';
            }
        }

        return $word;
    }

    private function gcd($x, $y)
    {
        while ($y != 0) {
            list($x, $y) = [$y, $x % $y];
        }

        return $x;
    }
}