<?php

// Ispišite sve parne brojeve između
// dva primljena broja putem GET metode
// ulaz ?x=26&y=3
// ulaz ?x=3&y=26
// izlaz mora biti
/*
4
6
8
10
12
14
16
18
20
22
24
26
*/

$i = isset($_GET['i']) ? $_GET['i'] : 0;    
$j = isset($_GET['j']) ? $_GET['j'] : 0;

if($i>$j)
{
    $veci = $i;
    $manji = $j;
}else{
    $veci = $j;
    $manji = $i;
}
for($manji;$manji<=$veci;$manji++)
    {
        if($manji%2==0)
        {
            echo $manji, '<br />';
        }
    }
?>

