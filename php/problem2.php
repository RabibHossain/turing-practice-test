<?php

class Solution {
    function isValid($s)
    {
        $set_1 = [ "(", ")"];
        $set_2 = [ "{", "}"];
        $set_3 = [ "[", "]"];
        $first = $s[0];
        $last = $s[strlen($s)-1];

        if (strlen($s) < 3) {
            if ((in_array($first, $set_1) == in_array($last, $set_1))
                && (in_array($first, $set_2) == in_array($last, $set_2))
                && (in_array($first, $set_3) == in_array($last, $set_3)))
                return true;
            else
                return false;
        } else {
            $beforeLast = $s[strlen($s)-2];
            if ((in_array($first, $set_1) == in_array($last, $set_1))
                && (in_array($first, $set_2) == in_array($last, $set_2))
                && (in_array($first, $set_3) == in_array($last, $set_3)) ||
                (in_array($beforeLast, $set_1) == in_array($last, $set_1))
                && (in_array($beforeLast, $set_2) == in_array($last, $set_2))
                && (in_array($beforeLast, $set_3) == in_array($last, $set_3))    )
                return true;
            else
                return false;
        }
    }
}

$s = readline();
$solution = new Solution();
$output = $solution->isValid($s);
echo $output ? 'valid' : 'invalid';