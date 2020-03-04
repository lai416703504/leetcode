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
        $current = $l1;
        $num1    = $current->val;
        while ($current->next !== null) {
            $current = $current->next;
            $num1    = $current->val . $num1;
//            var_dump($current);
        }

        $current = $l2;
        $num2    = $current->val;
        while ($current->next !== null) {
            $current = $current->next;
            $num2    = $current->val . $num2;
        }

        $num3 = (string)($num1 + $num2);
//var_dump($num1,$num2,$num3);
        $node = new ListNode(substr($num3, -1));
        $nextNode = $node;
        for ($i=strlen($num3)-2;$i>=0;$i--) {
            $nextNode->next = new ListNode($num3[$i]);
            $nextNode       = $nextNode->next;
        }

        return $node;
    }
}

$node1 = new ListNode(2);
$node1->next = new ListNode(4);
$node1->next->next = new ListNode(3);

$node2 = new ListNode(5);
$node2->next = new ListNode(6);
$node2->next->next = new ListNode(4);

$s   = new Solution();
$res = $s->addTwoNumbers($node1, $node2);
var_dump($res);