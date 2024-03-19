<?php
//Version ascendente, y usando array_reverse
/* function bubbleSort($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
} */

//Version bucle for inverso
function bubbleSort($arr) {
    $n = count($arr);
    for ($i = $n - 1; $i >= 1; $i--) {
        for ($j = $n - 1; $j >= $n - $i; $j--) {
            if ($arr[$j] > $arr[$j-1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j - 1];
                $arr[$j - 1] = $temp;
            }
        }
    }
    return $arr;
}
?>