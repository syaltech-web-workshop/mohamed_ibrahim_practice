<?php
$a = ['ahmed', 'ahmed', 'karim'];
$b = [20, 25, 28];
//$a =['a','b','c'];
//$b=[1,2,3];
function my_array_combine($a, $b)
{
    if (count($a) !== count($b)) {
        throw new Exception("Both parameters should have an equal 
        number of elements in php shell code on line 1");
    }
    $new_arr = [];
    for ($i = 0; $i < count($a); $i++) {
        $new_arr[$a[$i]] = $b[$i];
    }
    return $new_arr;
}

$res = my_array_combine($a, $b);
print_r($res);
//$res=my_array_combine($c,$d);
//print_r($res);