<h4>反轉陣列</h4>
<hr>
<?
$a=[2,4,6,1,8];

echo "<pre>";print_r($a);echo "</pre>";
$run=floor(count($a))/2 ; //迴圈跑的次數

for($i=0;$i<$run;$i++){
    $index=count($a)-1-$i;
    $tmp=$a[$i];
    $a[$i]=$a[$index];
    $a[$index]=$tmp;
    

}



echo "<pre>";print_r($a);echo "</pre>";

?>

<?php

$a=5 <br>
$b=10 <br>
$tem=$a;
$a=$b;
$b=$tem;

echo '$a='.$a."<br>";
echo '$b'.$b;

?>

<?php

$s="";
echo $a;
echo "<br>";
echo mb-substr($s,2,5);

$b=trim($s)





?>