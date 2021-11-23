<?php

$sum = 0;
$arr = [];
for ($i = 1; $i < 1000; $i++) {
    if ((int)$i % 3 === 0 || (int)$i % 5 === 0) {
        $sum += $i;
        array_push($arr, $i);
    }
}
echo $sum;
echo '<br>';



