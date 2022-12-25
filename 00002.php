<?php
class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        foreach ($nums as $ans1 => $num) {
            if (($ans2 = array_search($target - $num, array_slice($nums, $ans1+1))) !== false) {
                return [$ans1, $ans2+$ans1+1];
            }
        }

        return [];
    }
}