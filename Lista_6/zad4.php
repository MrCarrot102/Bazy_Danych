<?php 
function generate_calendar($daysInMonth, $firstWeekday){
    $calendar = []; 
    $week = array_fill(0,7,'');
    $day = 1; 

    for($i = $firstWeekday; $i < 7 && $day <= $daysInMonth; $i++){
        $week[$i] = $day++;
    }
    $calendar[] = $week; 

    while($day <= $daysInMonth){
        $week = array_fill(0,7,'');
        for($i = 0; $i < 7 && $day <= $daysInMonth; $i++){
            $week[$i] = $day++;
        }
        $calendar[] = $week;
    }

    return $calendar; 
}

$calendar = generate_calendar(31,2); 
print_r($calendar);

?>