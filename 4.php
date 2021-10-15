<?php

$arr1 = [5,6,7,5,5,8,9];
$arr2 = [1,2,3,4,5,5,8,9];
$lengthOfFirst = count($arr1);
$lengthOfSecond = count($arr2);

echo "arr1: ";
foreach( $arr1 as $value ){
    echo "$value ";
}
echo "\n";

echo "arr2: ";
foreach( $arr2 as $value ){
    echo "$value ";
}
echo "\n";

$arr1 = array_unique($arr1);
$arr2 = array_unique($arr2);

$lengthOfFirst = -count($arr1)+$lengthOfFirst;
$lengthOfSecond = -count($arr2)+$lengthOfSecond;

echo "arr1: ";
foreach( $arr1 as $value ){
    echo "$value ";
}
echo "\n";

echo "arr2: ";
foreach( $arr2 as $value ){
    echo "$value ";
}
echo "\n";
echo "duplicates in first: $lengthOfFirst\n";
echo "duplicates in second: $lengthOfSecond\n";

$arr3 = array_unique(array_merge($arr2, $arr1));
echo "arr3: ";
foreach( $arr3 as $value ){
    echo "$value ";
}
echo "\n";

$arr4 = [];

foreach( array_reverse($arr3) as $value ) {
    array_push($arr4, $value);
}
$arr3 = $arr4;
echo "arr3 reverse: ";
foreach( $arr3 as $value ){
    echo "$value ";
}
echo "\n";
?>