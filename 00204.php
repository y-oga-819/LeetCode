<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @param Integer $val
     * @return ListNode
     */
    function removeElements($head, $val) {

        $ans = [];
        $cursor = $head;
        while($cursor != null) {
            if ($cursor->val != $val ) {
                $ans[] = $cursor->val;
            }

            $cursor = $cursor->next;
        }

        $output = null;
        foreach(array_reverse($ans) as $val) {
            if ($output === null) {
                $output = new ListNode($val, null);
            } else {
                $output = new ListNode($val, $output);
            }
        }

        return $output;
    }
}