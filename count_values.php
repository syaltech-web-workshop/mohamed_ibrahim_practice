<?php
$arr = [1, 5, 2, 3, 1, 4, 5, 3, 2, 2];

function my_array_count_values($arr)
{
    $new_arr = [];
    foreach ($arr as $value) {
        if (!is_int($value) && !is_string($value)) {
            trigger_error("Not a string or integer", E_USER_WARNING);
            continue;
        }
        if (!isset($new_arr[$value])) {
            $new_arr[$value] = 0;
        }
        $new_arr[$value] += 1;
    }


//
//    foreach ($arr as $value) {
//
//        foreach ($new_arr as $key => $value2) {
//            if ($key == $value) {
//                $new_arr[$key]++;
//                break 2;
//            }
//        }
//        $new_arr[$value] = 1 ;
//    }
    return $new_arr;
}

$res = my_array_count_values($arr);
print_r($res);