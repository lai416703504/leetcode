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
        $charArr = [];
        $study   = 0;

        for ($i = 0; $i < strlen($chars); $i++) {
            if (isset($charArr[$chars[$i]])) {
                $charArr[$chars[$i]]++;
            } else {
                $charArr[$chars[$i]] = 1;
            }
        }

        foreach ($words as $word) {
            $tmp  = $charArr;
            $flag = true;
            for ($i = 0; $i < strlen($word); $i++) {
                if (empty($tmp[$word[$i]])) {
                    $flag = false;
                    break;
                } else {
                    $tmp[$word[$i]]--;
                }
            }

            if ($flag) {
                $study += strlen($word);
            }
        }

        return $study;
    }
}