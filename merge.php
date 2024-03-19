<?php
function mergeSort(&$arr) {
    $n = count($arr);
    if ($n <= 1) {
        return; // Base case: already sorted or empty array
    }

    $mid = (int)($n / 2);
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);

    mergeSort($left); // Recursively sort left half
    mergeSort($right); // Recursively sort right half

    // Merge the sorted halves
    merge($arr, $left, $right);
}

function merge(&$arr, $left, $right) {
    $i = $j = $k = 0;
    $leftLen = count($left);
    $rightLen = count($right);

    while ($i < $leftLen && $j < $rightLen) {
        if ($left[$i] <= $right[$j]) {
            $arr[$k] = $left[$i];
            $i++;
        } else {
            $arr[$k] = $right[$j];
            $j++;
        }
        $k++;
    }

    // Copy remaining elements from left and right (if any)
    while ($i < $leftLen) {
        $arr[$k] = $left[$i];
        $i++;
        $k++;
    }
    while ($j < $rightLen) {
        $arr[$k] = $right[$j];
        $j++;
        $k++;
    }
}

?>
