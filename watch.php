<?php
$x = array('Московское ', 'время', ': ');
foreach($x as $y){
echo $y;	
} 
$d = 2;
$time = time() + $d*60*60;
$x_h = date('H', $time);
$x = 'час';
$y = 'часа';
$z = 'часов';
if($x_h == 1 or $x_h == 21){
echo date("H $x", $time);
} 
if(2 <= $x_h && $x_h <= 4 or 22 <= $x_h && $x_h <= 23){
echo date("H $y", $time);
} 
if(5 <= $x_h && $x_h <= 20 or $x_h == 0){
echo date("H $z", $time);
}
$x_m = date("i", $time);
$x = "минут";
$y = "минута";
$z = "минуты";
if(5 <= $x_m && $x_m <= 20 or 25 <= $x_m && $x_m <= 30 or 35 <= $x_m && $x_m <= 40 or 45 <= $x_m && $x_m <= 50 or 55 <= $x_m && $x_m <= 60){
echo date(" i $x", $time); 
}
if($x_m == 1 or $x_m == 21 or $x_m == 31 or $x_m == 41 or $x_m == 51){
echo date(" i $y", $time); 
}
if(2 <= $x_m && $x_m <= 4 or 22 <= $x_m && $x_m <= 24 or 32 <= $x_m && $x_m <= 34 or 42 <= $x_m && $x_m <= 44 or 52 <= $x_m && $x_m <= 54){
echo date(" i $z", $time); 
}
?>