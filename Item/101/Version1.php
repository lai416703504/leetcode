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
        if ($root == null || ($root->left == null && $root->right == null)) {
            return true;
        }
        $lStack = new SplStack();
        $rStack = new SplStack();
        $lStack->push($root->left);
        $rStack->push($root->right);

        while (!$lStack->isEmpty() && $lStack->count() == $rStack->count()) {
            /**
             * @var TreeNode $lNode
             */
            $lNode = $lStack->pop();
            /**
             * @var TreeNode $rNode
             */
            $rNode = $rStack->pop();

//            var_dump($lNode);
//            var_dump($rNode);
            if ($lNode->val !== $rNode->val) {
                return false;
            }

            if ($lNode->left != null) {
                var_dump($lNode, $rNode);
                if ($lNode->left->val !== $rNode->right->val) {
                    return false;
                }
                $lStack->push($lNode->left);
                $rStack->push($rNode->right);
            } elseif ($rNode->right != null) {
                return false;
            }

            if ($lNode->right != null) {
                if ($lNode->right->val !== $rNode->left->val) {
                    return false;
                }
                $lStack->push($lNode->right);
                $rStack->push($rNode->left);
            } elseif ($rNode->left != null) {
                return false;
            }
        }

        return true;
    }
}

$node = create([1, 0]);
$s    = new Solution();
$bool = $s->isSymmetric($node);
var_dump($bool);
