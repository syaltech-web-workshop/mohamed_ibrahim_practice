<?php
$arr = [0 => 100, "color" => "red"];
function my_array_keys($arr, $valueSearch = null)
{
    $new_arr = [];
    foreach ($arr as $key => $value) {
        if ($arr[$key] == $valueSearch || $valueSearch == null) {
            $new_arr[] = $key;
        }
    }
    return $new_arr;
}

$result = my_array_keys($arr,'red');
print_r($result);