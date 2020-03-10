<?php
/**
 * author:lhj
 * email:416703504@qq.com
 * create: 2020/3/10 9:23
 **/

include "../../TreeNode.php";

// Definition for a binary tree node.
//class TreeNode
//{
//    public $val = null;
//    public $left = null;
//    public $right = null;
//
//    function __construct($value)
//    {
//        $this->val = $value;
//    }
//}
//
//function create(array $arr)
//{
////        $node = self::__construct(array_shift($arr));
//    $queue = new SplQueue();
//    $root  = $node = new TreeNode(array_shift($arr));
//    $queue->enqueue($node);
//    while (!$queue->isEmpty()) {
//        $node = $queue->dequeue();
//        if ($val = array_shift($arr)) {
//            $node->left = new TreeNode($val);
//            $queue->enqueue($node->left);
//        }
//
//        if ($val = array_shift($arr)) {
//            $node->right = new TreeNode($val);
//            $queue->enqueue($node->right);
//        }
//    }
//
//    return $root;
//}

class Solution
{
    private $length = 0;

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function diameterOfBinaryTree($root)
    {
        if (empty($root)) {
            return 0;
        }
        $this->depth($root);
        return $this->length - 1;
    }

    private function depth($node)
    {
        if ($node == null) {
            return 0;
        }

        $leftDepth    = $this->depth($node->left);
        $rightDepth   = $this->depth($node->right);
        $this->length = max($this->length, $leftDepth + $rightDepth + 1);
        return max($leftDepth, $rightDepth) + 1;
    }
}


$root = create([1, 2, 3, 4, 5]);
$s    = new Solution();
$res  = $s->diameterOfBinaryTree($root);
var_dump($res);