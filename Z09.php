<?php

// Ispišite tablicu 3 x 3 na način
// da u ćelijama kuteva stavite znak X

// DZ: Napraviti da radi za bilo koja dva unesena broja
//     Putem GET metode



$x = isset($_GET['x']) ? $_GET['x'] : 0;
$y = isset($_GET['y']) ? $_GET['y'] : 0;

echo '<table border="1">';
for($i=0;$i<=$x;$i++){
    echo '<tr>';
    for($j=0;$j<=$y;$j++){
        echo '<td>';   
        if(
            ($i==0 && $j==0)
            ||
            ($i==0 && $j==$y)
            ||
            ($i==$x && $j==0)
            ||
            ($i==$x && $j==$y)
        ){
            echo 'X';
        }else{
            echo '&nbsp;';
        }
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
