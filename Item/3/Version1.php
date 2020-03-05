<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2020/3/5
 * Time: 16:31
 */

class Solution
{

    /**
     * @param String $s
     *
     * @return Integer
     */
    function lengthOfLongestSubstring($s)
    {
        if ($s==='') {
            return 0;
        }
        $arr = [];
        for ($i = 0; $i < strlen($s); $i++) {
            $bucket = [$s[$i] => 1];
            for ($j = $i + 1; $j < strlen($s) ; $j++) {
                if (isset($bucket[$s[$j]])) {
                    break;
                } else {
                    $bucket[$s[$j]] = 1;
                }
            }
            $arr[] = $j - $i;
        }

        return max($arr);
    }
}

$s   = new Solution();
$res = $s->lengthOfLongestSubstring('abcabcbb');
var_dump($res);
