<?php

$x = isset($_GET['x']) ? $_GET['x'] : 0;
$y = isset($_GET['y']) ? $_GET['y'] : 0;
$ukupno = $x * $y;
$broj=0;
$vert=true;
echo '<table border="1">';
for($i=0;$i<=$x;$i++){
    echo '<tr>';
    for($j=0;$j<=$y;$j++){
        echo '<td>';   
            echo $broj;
            $broj++;
    
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
