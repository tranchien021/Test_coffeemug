<?php
// array even 
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$sumEven = 0;
if (count($array) <= 0) {
    echo 'Error';
}
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] % 2 == 0) {
        $sumEven = $sumEven + $array[$i];
    }
}
echo $sumEven . "</br>";


// Prints length in the format 
$arrayString = ['Tran', 'Minh', 'Chien', 'Chien', 'PHP', 'Developer', 'PHP', 'CoffeMug', 'Coffe'];
if (count($arrayString) <= 0) {
    echo 'Error';
}
// Check Array Unique 
$arrayString = array_values(array_unique($arrayString));
for ($j = 0; $j < count($arrayString); $j++) {
    echo "String: [" . $arrayString[$j] . "] - Length: [" . strlen($arrayString[$j]) . "]" . "</br>";
}


?>