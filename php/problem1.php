<?php
class Solution1 {
    function calPoints($ops) {
        $new_arr = [];
        foreach ($ops as $op) {
            switch ($op) {
                case "C":
                    array_pop($new_arr);
                    break;
                case "D":
                    $new_arr[] = (int)end($new_arr) * 2;
                    break;
                case "+":
                    $new_arr[] = (int)end($new_arr) + (int)$new_arr[count($new_arr) -2];
                    break;
                default:
                    $new_arr[] = $op;
                    break;
            }
        }
        return array_sum($new_arr);
    }
}

$ops = explode(" ", readline());

$solution = new Solution1();
echo $output = $solution->calPoints($ops);