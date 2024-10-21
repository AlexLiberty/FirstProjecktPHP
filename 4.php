<?php
$startDeposit = 300;
$percentRate = 20;
$years = 20;

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Рік</th><th>Сума на початку</th><th>Сума у кінці</th><th>Прибуток</th></tr>";

$current = $startDeposit;

for ($year = 1; $year <= $years; $year++) {
    $previous= $current;
    $current= $previous * (1 + $percentRate / 100);
    $profit = $current - $previous;

    echo "<tr>";
    echo "<td>" . $year . "</td>";
    echo "<td>" . number_format($previous, 2) . "</td>";
    echo "<td>" . number_format($current, 2) . "</td>";
    echo "<td>" . number_format($profit, 2) . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
