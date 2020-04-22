

<?php

    $time="2020-04-16 11:30:20";
    $serialTime=strtotime($time);

    echo date(" Y/m/d/ H:i:s 1",$serialTime);


?>

<?php
    $today=date("Y-m-d");//當天日期
    $nextBirth="2020-08-28";
    $between=strtotime($nextBirth)-strtotime($today);
    $days=$between/60/60/24;
    echo "還有: ".$days."天";
    echo"<br>";


?>

<?php
    $date=strtotime("+3 days". $today);
    echo date("Y-m-d", $date);

    echo"<hr>";

    echo date("Y-m-d",strtotime("-7 day 2020-08-28"));

    echo"<hr>";

    $start = date("Y-m-d");
    $end = "2020-5-16";
    $datediff = strtotime($end) - strtotime($start);
    $datediff = floor($datediff/(60*60*24));
    for($i = 0; $i < $datediff + 1; $i++){
        echo date("Y-m-d", strtotime($start . ' + ' . $i . 'day')) . "\n"."<br>";
    }
     

?>