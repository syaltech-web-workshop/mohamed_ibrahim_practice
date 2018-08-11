<?php

function my_func()
{
	$array = func_get_args();
	foreach($array as $element){
		echo $element . "\n";
	}
}

function my_func2($one,...$elements)
{
	foreach($elements as $element){
		echo $element . "\n";
	}
}

my_func("one","two","three");
echo "===========\n";
my_func2("one","two","three");