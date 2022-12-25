<?php
class Solution {

    /**
     * @param Integer $columnNumber
     * @return String
     */
    function convertToTitle($columnNumber) {
        $alphabets = 'ZABCDEFGHIJKLMNOPQRSTUVWXY';

        $ans = [];
        while ($columnNumber > 0) {
            $mod = $columnNumber % 26;
            $ans[] = str_split($alphabets)[$mod];

            if ($mod === 0) {
                $mod = 26;
            }

            $columnNumber = ($columnNumber - $mod) / 26;
        }
        return implode('', array_reverse($ans));
    }
}