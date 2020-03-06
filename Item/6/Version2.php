<?php
/**
 * author:lhj
 * email:416703504@qq.com
 * create: 2020/3/6 17:27
 **/

class Solution
{

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert($s, $numRows)
    {
        if($numRows==1){
            return $s;
        }
        $round = ($numRows << 1) - 2;
        $len   = strlen($s);
        $row   = 0;
        $col   = 0;
        $arr   = [[$s[0]]];
        for ($i = 1; $i < $len; $i++) {
            $mod = ($i-1) % $round;
            if ($mod < $numRows-1) {
                $row++;
            } else {
                $row--;
                $col++;
            }

            $arr[$row][$col] = $s[$i];
        }

        $str = '';
        foreach ($arr as $val) {
            $str .= implode('', $val);
        }

        return $str;
    }
}

$s   = new Solution();
$res = $s->convert("PAYPALISHIRING",3);
var_dump($res);
