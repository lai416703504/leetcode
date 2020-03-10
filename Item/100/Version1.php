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
        $pStack = new SplStack();
        $qStack = new SplStack();
        $pStack->push($p);
        $qStack->push($q);
        while ($pStack->count() == $qStack->count() && !$pStack->isEmpty()) {
            /**
             * @var TreeNode $pNode
             */
            $pNode = $pStack->pop();
            /**
             * @var TreeNode $qNode
             */
            $qNode = $qStack->pop();

            if ($pNode->val !== $qNode->val) {
                return false;
            }

            if ($pNode->left!==null) {
                if ($pNode->left->val !== $qNode->left->val) {
                    return false;
                }
                $pStack->push($pNode->left);
                $qStack->push($qNode->left);
            } elseif ($qNode->left !== null) { //均为null
                return false;
            }

            if ($pNode->right!==null) {
                if ($pNode->right->val !== $qNode->right->val) {
                    return false;
                }
                $pStack->push($pNode->right);
                $qStack->push($qNode->right);
            } elseif ($qNode->right !== null) { //均为null
                return false;
            }

        }
        return true;
    }
}

$p = create([1, 2]);
$q = create([1, null, 2]);

$s    = new Solution();
$bool = $s->isSameTree($p, $q);
var_dump($bool);
