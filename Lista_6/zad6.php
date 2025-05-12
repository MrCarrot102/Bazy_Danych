<?php
$n = isset($_GET['n']) ? intval($_GET['n']) : 0;
?>

<form method="get">
    Podaj n: <input type="number" name="n" min="1">
    <input type="submit" value="Generuj">
</form>

<?php
if ($n > 0) {
    echo "<table border='1'>";
    echo "<tr><th></th>";
    for ($i = 1; $i <= $n; $i++) echo "<th>$i</th>";
    echo "</tr>";

    for ($i = 1; $i <= $n; $i++) {
        echo "<tr><th>$i</th>";
        for ($j = 1; $j <= $n; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>