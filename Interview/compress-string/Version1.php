<?php
/**
 * author:lhj
 * email:416703504@qq.com
 * create: 2020/3/16 9:57
 **/

class Solution
{

    /**
     * @param String $S
     * @return String
     */
    function compressString($S)
    {
        $len = strlen($S);
        if ($len < 3) {
            return $S;
        }

        $tmp   = $S[0];
        $count = 1;
        $str   = '';

        for ($i = 1; $i < $len; $i++) {
            if ($tmp == $S[$i]) {
                $count++;
            } else {
                $str .= $tmp . $count;
                $tmp   = $S[$i];
                $count = 1;
            }
        }

        $str .= $tmp . $count;

        if($len<strlen($str)){
            return $S;
        }

        return $str;
    }
}