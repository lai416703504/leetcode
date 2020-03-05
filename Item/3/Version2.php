<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2020/3/5
 * Time: 16:31
 */

/**
 * 这个是大佬的解法
 * Class Solution
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
//        if ($s==='') {
//            return 0;
//        }
        $map = [];
        $max = 0;
        $left = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            if(array_key_exists($s[$i],$map)){ //查看是否有重复的字符
                $left = max($left, $map[$s[$i]] + 1);
            }
            $map[$s[$i]] = $i; //该字符所在的下标位置
            $max = max($max,$i-$left+1); //$i(当前下标位置)减去$left(最左边的下标位置)+1 等于 最长字符长度
        }

        return $max;
    }
}

$s   = new Solution();
$res = $s->lengthOfLongestSubstring('abcabcbb');
var_dump($res);
