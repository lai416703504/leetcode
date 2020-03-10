<?php
/**
 * author:lhj
 * email:416703504@qq.com
 * create: 2020/3/10 10:32
 **/

include "../../Util/TreeNode.php";

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */
class Solution
{

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function inorderTraversal($root)
    {
        $stack = new SplStack();
//        $stack->push($root);
        /**
         * @var TreeNode $node
         */
        $node = $root;
        $res  = [];
        while (!$stack->isEmpty() || $node != null) {
            while ($node != null) {
                $stack->push($node);
                $node = $node->left;
            }

            $node  = $stack->pop();
            $res[] = $node->val;
            $node  = $node->right;
        }

        return $res;
    }
}

$root = create([1, null, 2, 3]);
//var_dump($root);
$s   = new Solution();
$res = $s->inorderTraversal($root);
var_dump($res);