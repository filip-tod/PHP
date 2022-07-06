<?php

$x = isset($_GET['x']) ? $_GET['x'] : 0;
$y = isset($_GET['y']) ? $_GET['y'] : 0;

$ukupno= $x*$y;
$ispis=1;
$matrica=[];
$maxRed=1;
$maxStupac=1;
$minStupac=0;
$minRed=0;

echo '<table border="1">';
while ($ispis <= $ukupno){
for($i=$maxStupac;$i>=$minStupac;$i--)
{
    $matrica[$maxRed][$j] = $ispis++;
}
$maxRed--;
    if ($ispis > $ukupno) break;
    {
    
    for($j=$maxRed;$j>=$minRed;$j--){
        $matrica[$j][$minStupac] = $ispis++;
    }
$minStupac++;
    if($ispis > $x*$y) break;
    for($i=$minStupac; $i <= $maxStupac; $i++){
       $matrica[$minRed][$i] = $ispis++;
    }
$minRed++;
    if ($ispis > $x*$y) break;
    for($j=$minRed; $j <= $maxRed; $j++){
        $matrica[$j][$maxStupac] = $ispis++;
    }
$maxStupac--;
}
    {
        for($i=0;$i<$x;){
        
        echo '<tr>'; 
        echo '<td>'. $matrica[$i][$j].   '</td>';
            echo $j++;
    }
    echo '</tr>';
    $i++;
}
}
echo '</table>';


