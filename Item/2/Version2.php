<?php
/**
 * Created by PhpStorm.
 * User: lhj
 * Date: 2020/3/4
 * Time: 18:07
 */

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class ListNode
{
    public $val = 0;
    public $next = null;

    function __construct($val)
    {
        $this->val = $val;
    }
}

/**
 * 这里不能处理长整型
 * Class Solution
 */
class Solution
{

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     *
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2)
    {
        $carry    = 0;
        /**
         * @var null|ListNode $node
         * @var null|ListNode $currentNode
         */
        $node = new ListNode(0);
        $currentNode  = $node;
        while ($l1 != null || $l2 != null) {
            $num1 = $l1->val ?? 0;
            $num2 = $l2->val ?? 0;

            $currentNode->next = new ListNode(($num1 + $num2 + $carry) % 10);
            $currentNode       = $currentNode->next;


            $carry = intval(($num1 + $num2 + $carry)/10);
            $l1 = $l1->next??null;
            $l2 = $l2->next??null;
        }

        if($carry>0){
            $currentNode->next = new ListNode($carry);
        }

        return $node->next;
    }
}

$node1             = new ListNode(2);
$node1->next       = new ListNode(4);
$node1->next->next = new ListNode(3);

$node2             = new ListNode(5);
$node2->next       = new ListNode(6);
$node2->next->next = new ListNode(4);

$s   = new Solution();
$res = $s->addTwoNumbers($node1, $node2);
var_dump($res);