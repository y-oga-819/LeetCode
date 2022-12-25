<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $n
     * @return Integer[]
     */
    function shuffle($nums, $n) {
        $ans = [];
        for ($i=0; $i<count($nums)/2; $i++) {
            $ans[] = $nums[$i];
            $ans[] = $nums[$i+$n];
        }

        return $ans;
    }
}