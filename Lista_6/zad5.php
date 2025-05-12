<?php
function generate_calendar($daysInMonth, $firstWeekday) {
    $calendar = [];
    $week = array_fill(0, 7, '');
    $day = 1;

    for ($i = $firstWeekday; $i < 7 && $day <= $daysInMonth; $i++) {
        $week[$i] = $day++;
    }
    $calendar[] = $week;

    while ($day <= $daysInMonth) {
        $week = array_fill(0, 7, '');
        for ($i = 0; $i < 7 && $day <= $daysInMonth; $i++) {
            $week[$i] = $day++;
        }
        $calendar[] = $week;
    }

    return $calendar;
}

$calendar = generate_calendar(31, 2);
$days = ['Pn', 'Wt', 'Śr', 'Cz', 'Pt', 'So', 'Nd'];
echo "<table border='1'><tr>";
foreach ($days as $d) echo "<th>$d</th>";
echo "</tr>";

foreach ($calendar as $week) {
    echo "<tr>";
    foreach ($week as $day) {
        echo "<td>" . ($day ?: '') . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
