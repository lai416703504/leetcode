<?php

/**
 * author:lhj
 * email:416703504@qq.com
 * create: 2020/3/17 9:10
 **/
class Solution
{

    /**
     * @param String[] $words
     * @param String $chars
     * @return Integer
     */
    function countCharacters($words, $chars)
    {

        $study   = 0;
        $charArr = count_chars($chars,1);

        foreach ($words as $word) {
            $tmp  = $charArr;
            $flag = true;
            $strlen = strlen($word);
            for ($i = 0; $i < $strlen; $i++) {
                if (empty($tmp[ord($word[$i])])) {
                    $flag = false;
                    break;
                } else {
                    $tmp[ord($word[$i])]--;
                }
            }

            if ($flag) {
                $study += $strlen;
            }
        }

        return $study;
    }
}

$s = new Solution();
$s->countCharacters(["cat","bt","hat","tree"],"atach");