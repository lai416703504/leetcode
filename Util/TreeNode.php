<?php
/**
 * author:lhj
 * email:416703504@qq.com
 * create: 2020/3/10 10:32
 **/


class TreeNode
{
    public $val = null;
    /**
     * @var null|TreeNode $left
     */
    public $left = null;
    /**
     * @var null|TreeNode $right
     */
    public $right = null;

    function __construct($value)
    {
        $this->val = $value;
    }
}

//广度优先插入
function create(array $arr)
{
//        $node = self::__construct(array_shift($arr));
    $queue = new SplQueue();
    $root  = $node = new TreeNode(array_shift($arr));
    $queue->enqueue($node);
    while (!$queue->isEmpty()) {
        $node = $queue->dequeue();
        if ($val = array_shift($arr)) {
            $node->left = new TreeNode($val);
            $queue->enqueue($node->left);
        }

        if ($val = array_shift($arr)) {
            $node->right = new TreeNode($val);
            $queue->enqueue($node->right);
        }
    }

    return $root;
}