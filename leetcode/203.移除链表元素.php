<?php

/*
 * @lc app=leetcode.cn id=203 lang=php
 *
 * [203] 移除链表元素
 */

// @lc code=start
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution
{

    /**
     * @param ListNode $head
     * @param Integer $val
     * @return ListNode
     */
    public function removeElements($head, $val)
    {
        // 哨兵节点
        $sentinelNode = new ListNode(-1);
        $sentinelNode->next = $head;

        $prevNode = $sentinelNode;
        $currNode = $head;

        while ($currNode != null) {
            if ($currNode->val == $val) {
                $prevNode->next = $currNode->next;
            } else {
                $prevNode = $currNode;
            }
            $currNode = $currNode->next;
        }

        return $sentinelNode->next;
    }
}
// @lc code=end
