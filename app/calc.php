<?php

$date=$_POST['date'];
$years=$_POST['years'];
$summ=$_POST['summ'];
$summadd = $_POST['summadd'];

$daysInYear = 365;
$daysInMonth = 29.3;
$percent= 0.1;


if($_POST['calcDep'] !='true'){    
    $summadd = 0;
} 

for ($i = 1; $i <= $years * 12; $i++) {
    $summ = $summ  + $summadd + ($summadd + $summ )* $daysInMonth  * ($percent / $daysInYear);
}
echo round($summ);
