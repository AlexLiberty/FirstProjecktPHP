<?php
$min = 1;
$max = 99;
$numbers = [];

for ($i = 0; $i < 100; $i++)
{
    $randomNumber = rand($min, $max);
    $numbers[] = $randomNumber;
    echo $randomNumber . " ";
}
$minNumber = min($numbers);
$maxNumber = max($numbers);

echo "<br><br>Мінімальне число: " . $minNumber . "<br>";
echo "Максимальне число: " . $maxNumber . "<br>";
?>
