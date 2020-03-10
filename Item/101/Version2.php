<?php
/**
 * author:lhj
 * email:416703504@qq.com
 * create: 2020/3/10 15:56
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
     * @return Boolean
     */
    function isSymmetric($root)
    {
        return $this->isMirror($root->left,$root->right);
    }

    /**
     * @param TreeNode $l
     * @param TreeNode $r
     */
    private function isMirror($l, $r)
    {
        if ($l == null && $r == null) {
            return true;
        }
        if ($l == null || $r == null) {
            return false;
        }
        return ($l->val == $r->val) && $this->isMirror($l->left,$r->right) && $this->isMirror($l->right,$r->left);
    }
}

$node = create([1, 0]);
$s    = new Solution();
$bool = $s->isSymmetric($node);
var_dump($bool);
