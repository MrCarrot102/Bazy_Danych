<?php 
$values = ['00','33','66','99','cc','ff'];
echo "<table border='1' cellpadding='4'>";
foreach ($values as $r){
    foreach($values as $g){
        echo "<tr>";
        foreach($values as $b){
            $color = "#$r$g$b"; 
            echo "<td style='background-color:$color;'>$color</td?";
        }
        echo "</tr>";
    }
}

echo "</table>";

?>