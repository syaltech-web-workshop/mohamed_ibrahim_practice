<?php
$arr = ["oranges", "apples", "pears"];

function my_array_flip($arr)
{
    $new_arr = [];
    foreach ($arr as $key => $value) {
        if (!is_int($value) && !is_string($value)) {
            trigger_error("Not a string or integer", E_USER_WARNING);
            continue;
        }
        $new_arr[$value] = $key;
    }
    return $new_arr;
}

$result = my_array_flip($arr);
print_r($result);