<?php
$arr=[12, 10, 9];

function my_array_pad($arr,$size,$valuekey){
    // Don't use another array .. modify the parameter directly and return it
    $new_arr=[];
    if ($size<0){
        for ($j=0;$j<abs($size)-count($arr);$j++){
            $new_arr[$j] = $valuekey ;
            print_r($new_arr)  ;
        }
        foreach ($arr as $value){
            $new_arr[] = $value;
        }
    }
    else if (abs($size)< count($arr)){
        $new_arr = $arr ;
    }
    else{
        $i=0;
        foreach ($arr as $key=>$value){
            $new_arr[$key] = $value;
            $i++;
        }
        for ($k=$i ;$k<intval($size);$k++){
            $new_arr[$k]=$valuekey;
        }
    }
    return $new_arr ;
}
$result = my_array_pad($arr,2,0);
print_r($result);