<?php

$a = ["color" => "red", 3 => 2, 4];
$b = [3 => "a", "b", "color" => "green", "shape" => "trapezoid", 4];
$c = [3, 4, 5];
function my_array_merge(...$arrays)
{
    $new_arr = [];
    foreach ($arrays as $array) {
        foreach ($array as $key => $value) {
            if (is_numeric($key)) {
                $new_arr[] = $value;
            } else {
                $new_arr[$key] = $value;
            }
        }
    }
    return $new_arr;
}

$res = my_array_merge($a, $b, $c);
print_r($res);

//$a = ["color" => "red", 2, 4];
//Function ArrayMerged($a)
//{
//    $Zoo = [];
//    foreach ($a as $arg) {
//        foreach ((array)$arg as $K => $V) {
//            $Zoo[$K][] = $V;
//        }
//    }
//    return $Zoo;
//}
//
//$results = ArrayMerged($a);
//print_r($results);
//exit;
//$a = ["color" => "red", 2, 4];
//$b = ["a", "b", "color" => "green", "shape" => "trapezoid", 4];
//
//function my_array_mergee($a, $b)
//{
//    global $i;
//    $i = 0;
//    $new_arr = [];
//    foreach ($a as $value) {
//        foreach ($new_arr as $key => $value2) {
//            if ($key == $value) {
//                $new_arr[$key] = $value;
//            }
//        }
//        $new_arr[$i] = $value;
//        $i++;
//    }
//    foreach ($b as $value) {
//        foreach ($new_arr as $key => $value2) {
//            if ($key == $value) {
//                $new_arr[$key] = $value;
//            }
//        }
//        $new_arr[$i] = $value;
//        $i++;
//    }
//    return $new_arr;
//}
//
//$result = my_array_mergee($a, $b);
//print_r($result);