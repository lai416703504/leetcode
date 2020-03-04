<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2020/3/4
 * Time: 11:39
 */

class Solution
{
    private $rows;
    private $cols;

    /**
     * @param Integer[][] $grid
     *
     * @return Integer
     */
    function orangesRotting($grid)
    {
        $this->rows = count($grid);
        $this->cols = count($grid[0]);

        $queue = new SplQueue();

        foreach ($grid as $row => $item) {
            foreach ($item as $col => $val) {
                if ($val == 2) {
                    $queue->enqueue([$row, $col, 0]); //行 列 分钟
                }
            }
        }

        $min = 0;
        while (!$queue->isEmpty()) {
            list($row, $col, $min) = $queue->dequeue();
            foreach ($this->nei($row, $col) as $r => $c) {
                if ($grid[$r][$c] == 1) {
                    $grid[$r][$c] = 2;
                    $queue->enqueue([$r, $c, $min + 1]);
                }
            }
        }

        foreach ($grid as $item){
            if(in_array(1,$item)){
                return -1;
            }
        }

        return $min;
    }

    function nei($row, $col)
    {
        foreach ([
                     [$row - 1, $col],
                     [$row + 1, $col],
                     [$row, $col - 1],
                     [$row, $col + 1]
                 ] as $v) {
            if (
                $v[0] >= 0 &&
                $v[0] < $this->rows &&
                $v[1] >= 0 &&
                $v[1] <= $this->cols
            ) {
                yield $v[0] => $v[1];
            }
        }
    }
}

$eg1 = [[2, 1, 1], [0, 1, 1], [1, 0, 1]];

$eg2 = [[2, 1, 1], [1, 1, 0], [0, 1, 1]];

$eg3 = [[0, 2]];

$s = new Solution();
$res = $s->orangesRotting($eg2);
var_dump($res);exit;