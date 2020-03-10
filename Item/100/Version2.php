<?php
/**
 * author:lhj
 * email:416703504@qq.com
 * create: 2020/3/10 14:58
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
     * @param TreeNode $p
     * @param TreeNode $q
     * @return Boolean
     */
    function isSameTree($p, $q)
    {
        if ($p === null && $q === null) {
            return true;
        }

        if ($p != null && $q != null && $p->val == $q->val) {
            return $this->isSameTree($p->left,
                    $q->left) && $this->isSameTree($p->right, $q->right);
        } else {
            return false;
        }
    }
}

$p = create([1, 2]);
$q = create([1, null, 2]);

$s    = new Solution();
$bool = $s->isSameTree($p, $q);
var_dump($bool);
