<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2020/3/5
 * Time: 17:44
 */

class Solution
{

    /**
     * @param String $s
     *
     * @return String
     */
    function longestPalindrome($s)
    {
        $revS = strrev($s);
        $len  = strlen($s);
        $res  = '';
        for ($i = 0; $i < $len; $i++) {
            $j = stripos($revS,$s[$i]);
            while (false !== $j) {
                if (substr($s, $i, $len - $j - $i) == substr($revS, $j, $len - $j - $i)) {
                    $str = substr($s, $i, $len - $j - $i);

                    if (strlen($res) < strlen($str)) {
                        $res = $str;
                    }
                }
                $j = stripos($revS,$s[$i], $j+1);

                if(strlen($res)>($len/2)){
                    break;
                }
            }
        }

        return $res;
    }
}

$s = new Solution();
$res = $s->longestPalindrome("cbbd");

var_dump($res);
