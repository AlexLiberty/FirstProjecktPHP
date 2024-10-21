<?php
echo "<table cellpadding='5' cellspacing='0'>";

for ($i = 2; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 2; $j <= 10; $j++) {
        echo "<td>" . $j . " * " . $i . " = " . ($i * $j). "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
