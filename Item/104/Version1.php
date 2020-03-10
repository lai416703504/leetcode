<?php
/**
 * author:lhj
 * email:416703504@qq.com
 * create: 2020/3/10 14:49
 **/

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */

include '../../Util/TreeNode.php';

class Solution
{

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function maxDepth($root)
    {
        if ($root == null) {
            return 0;
        }

        $leftDepth  = $this->maxDepth($root->left);
        $rightDepth = $this->maxDepth($root->right);

        return max($leftDepth, $rightDepth) + 1;
    }
}

$root = create([3, 9, 20, null, null, 15, 7]);
$obj  = new Solution();
$res  = $obj->maxDepth($root);
var_dump($res);
