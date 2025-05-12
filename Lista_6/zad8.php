<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $totalLength = array_sum(
        array_map(function($val) {
            return strlen($val);
        }, $_POST)
    );

    echo "<p>Łączna długość wszystkich tekstów: <strong>$totalLength</strong> znaków.</p>";
}
?>

<form method="post">
    <label>Pole 1: <input type="text" name="field1"></label><br><br>
    <label>Pole 2: <input type="text" name="field2"></label><br><br>
    <label>Pole 3: <input type="text" name="field3"></label><br><br>
    <label>Pole 4: <input type="text" name="field4"></label><br><br>

    <input type="submit" value="Oblicz długość">
</form>
