<?php
$arrays = [
    [
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ],
    [
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ],
    [
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ],
    [
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    ]
];

function my_array_column($arrays, $columnKey)
{
    $new_arr = [];
    $columnKey = strtolower($columnKey);
    foreach ($arrays as $value) {
//        foreach ($array as $key => $value) {
////        echo $value ;
////        exit;
//            if ($key == $columnKey) {
//                $new_arr[] = $value;
//            }
//        }
        if (isset($value[$columnKey])){
        $new_arr[] = $value[$columnKey];
        }
    }
    return $new_arr;
}

$result = my_array_column($arrays, 'first_name');
print_r($result);