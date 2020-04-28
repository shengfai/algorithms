<?php

/*
 * @lc app=leetcode.cn id=21 lang=php
 *
 * [21] 合并两个有序链表
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
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    public function mergeTwoLists($l1, $l2)
    {
        /**
         * 递归方式
         */
        
        // if ($l1 == null) {
        //     return $l2;
        // }

        // if ($l2 == null) {
        //     return $l1;
        // }

        // if ($l1->val < $l2->val) {
        //     $l1->next = $this->mergeTwoLists($l1->next, $l2);
        //     return $l1;
        // } else {
        //     $l2->next = $this->mergeTwoLists($l2->next, $l1);
        //     return $l2;
        // }

        /**
         * 遍历方式
         */

        $mergedList = new ListNode(null);
        $curNode = $mergedList;

        while (($l1 != null) && ($l2 != null)) {
            if ($l1->val < $l2->val) {
                $curNode->next = $l1;
                $l1 = $l1->next;
            } else {
                $curNode->next = $l2;
                $l2 = $l2->next;
            }
            $curNode = $curNode->next;
        }

        if ($l1 != null) {
            $curNode->next = $l1;
        }
        if ($l2 != null) {
            $curNode->next = $l2;
        }

        return $mergedList->next;
    }
}
// @lc code=end
