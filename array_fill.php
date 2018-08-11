<?php
$result = my_array_fill(-10, 5, 'hi');
print_r($result);
function my_array_fill($from, $to, $str)
{
    if ($to < 0) {
        trigger_error("num Must be greater than zero", E_USER_WARNING);
        return;
    }
    // Use single for loop
    $arr = [];
    if ($from < 0) {
        $arr[$from] = $str;
        for ($i = 0; $i < $to -1; $i++) {
            $arr[$i] = $str;
        }
    } else {
        for ($i = $from; $i < ($from + $to); $i++) {
            $arr[$i] = $str;
        }
    }
    return $arr;
}
