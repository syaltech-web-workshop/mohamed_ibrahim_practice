<?php
$arr = ["a", "b", "c", "d", "e"];
function my_array_slice($arr, $offset, $length = null)
{
    // Handle the negative situations
    $new_arr = [];
    if (is_null($length)) {
        $length = count($arr);
    }
//    if ($offset < -1) {
//        for ($i = abs($offset) + 1; $i < abs($offset) + $length; $i++) {
//            $new_arr[] = $arr[$i];
//        }
//    } else {
    for ($i = $offset; $i < ($offset + $length) && $i < (count($arr)); $i++) {
        $new_arr[] = $arr[$i];
    }
//    }
    return $new_arr;
}

$result = my_array_slice($arr, 1, 7);
print_r($result);