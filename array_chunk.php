<?php

$arr = [1,2,3,4,5,6,7,8,9,10];
function my_array_chunck($arr,$chunck_size){
    if ($chunck_size < 1){
        throw new Exception("chunk size must be greater than one");

    }
    $out_put=[];
    $arr_count = count($arr);
    $chunck_counts= ceil($arr_count / $chunck_size);

    for ($i=0;$i<$chunck_counts ; $i++){
        $out_put[$i] = [];
        for ($j=($i*$chunck_size) ; $j< ($i+1)*$chunck_size && $j<$arr_count ; $j++){
            $out_put[$i][$j] = $arr[$j] ;
        }
    }
    return $out_put ;
}
$res =my_array_chunck($arr,0);
print_r($res);