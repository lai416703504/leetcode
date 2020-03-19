<?php

/**
 * author:lhj
 * email:416703504@qq.com
 * create: 2020/3/19 15:08
 **/
class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function longestPalindrome($s)
    {
        $len    = strlen($s);
        $bucket = [];
        for ($i = 0; $i < $len; $i++) {
//            if (!isset($bucket[$s[$i]])) {
//                $bucket[$s[$i]] = 1;
//            } else {
                $bucket[$s[$i]]++;
//            }
        }

        $str  = 0;
        $flag = false;
//        var_dump($bucket);
        foreach ($bucket as $char=>$num) {
            $str += intval($num/2)*2;
            if(!$flag && $num%2){
                $str+=1;
                $flag=true;
            }
        }

        return $str;
    }
}

$s = new Solution();
$res = $s->longestPalindrome("abccccdd");
var_dump($res);