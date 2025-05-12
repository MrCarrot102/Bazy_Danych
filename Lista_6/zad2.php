<?php
function insertion_sort(&$array){
    for($i = 1; $i < count($array); $i++){
        $key = $array[$i];
        $j = $i - 1;
        while($j >= 0 && $array[$j] > $key){
            $array[$j + 1] = $array[$j];
            $j--;
        }
        $array[$j + 1] = $key; 
    }
}

$data = [5,2,9,1,5,6];
echo "przed sortowaniem: " . implode (", ", $data) . "<br>";
insertion_sort($data);
echo "po sortowaniu: " . implode(", ", $data);
?>