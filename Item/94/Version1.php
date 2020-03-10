<?php
/**
 * author:lhj
 * email:416703504@qq.com
 * create: 2020/3/10 10:32
 **/

include "../../TreeNode.php";

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
        if (empty($root)) {
            return [];
        }

        if ($root->left) {
            $res = $this->inorderTraversal($root->left);
        }

        if ($root->val) {
            $res[] = $root->val;
        }

        if ($root->right) {
            $res = array_merge($res, $this->inorderTraversal($root->right));
        }

        return $res;
    }
}

$root = create([1, null, 2, 3]);
//var_dump($root);
$s   = new Solution();
$res = $s->inorderTraversal($root);
var_dump($res);