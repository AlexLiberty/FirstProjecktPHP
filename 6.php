<?php
$number = 5493256;
$digits = str_split($number);
$digit_count = count($digits);

$max_digit = max($digits);
$min_digit = min($digits);

$sum_digits = array_sum($digits);

$average_digits = $sum_digits / $digit_count;

echo "Number: " . "<b>". $number . "</b>". "<br>";
echo "Digits in the number: "."<b>". $digit_count ."</b>". "<br>";
echo "Max: " . "<b>". $max_digit . "</b>". "<br>";
echo "Min: " . "<b>". $min_digit . "</b>". "<br>";
echo "Summ: " . "<b>". $sum_digits . "</b>". "<br>";
echo "AVG: " . "<b>".number_format($average_digits, 2) . "<b>";

