<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2020/3/4
 * Time: 11:39
 */

class Solution
{

    /**
     * @param Integer[][] $grid
     *
     * @return Integer
     */
    function orangesRotting($grid)
    {
        $min = 0;
        do{
            $bucket = [];
            $oneNum  = 0;
            foreach ($grid as $key => $item) {
                foreach ($item as $k => $v) {
                    $zeroNum = 0;
                    if ($v == 2) {
                        //上
                        $i = $key - 1;
                        $j = $k;

                        if(!isset($grid[$i][$j]) || $grid[$i][$j] == 0){
                            $zeroNum++;
                        }elseif(!isset($bucket[$i . '_' . $j]) && $grid[$i][$j] == 1) {
                            $oneNum++;
                            $grid[$i][$j]            = 2;
                            $bucket[($i) . '_' . $j] = 1;
                        }

                        //下
                        $i = $key + 1;
                        $j = $k;

                        if(!isset($grid[$i][$j]) || $grid[$i][$j] == 0){
                            $zeroNum++;
                        }elseif(!isset($bucket[$i . '_' . $j]) && $grid[$i][$j] == 1) {
                            $oneNum++;
                            $grid[$i][$j]            = 2;
                            $bucket[($i) . '_' . $j] = 1;
                        }

                        //左

                        $i = $key;
                        $j = $k-1;

                        if(!isset($grid[$i][$j]) || $grid[$i][$j] == 0){
                            $zeroNum++;
                        }elseif(!isset($bucket[$i . '_' . $j]) && $grid[$i][$j] == 1) {
                            $oneNum++;
                            $grid[$i][$j]            = 2;
                            $bucket[($i) . '_' . $j] = 1;
                        }

                        //右

                        $i = $key;
                        $j = $k+1;

                        if(!isset($grid[$i][$j]) || $grid[$i][$j] == 0){
                            $zeroNum++;
                        }elseif(!isset($bucket[$i . '_' . $j]) && $grid[$i][$j] == 1) {
                            $oneNum++;
                            $grid[$i][$j]            = 2;
                            $bucket[($i) . '_' . $j] = 1;
                        }

                        if($zeroNum==4 && $oneNum>0){
                            return -1;
                        }
                    }
                }
            }

            if($oneNum==0 && $min==0){
                return 0;
            }
            $min++;
        }while ($min > 0);

        return $min;
    }
}