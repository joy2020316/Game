<?php
if(isset($_GET["year"])){
    $y = $_GET["year"];
}else{
    $y = date("Y");
}
 
?>
<?php
$m = date("m");

if(isset($_GET["month"])){
    $m = $_GET["month"];
 }


    if($m>=12){   
        $nextY=$y+1;
        $nextM=1;
    }else{
        $nextY=$y;
        $nextM=$m+1;
    }

    if($m<=1){ 
        $prevY=$y-1;
        $prevM=12;
    }else{
        $prevY=$y-1;
        $prevM=$m-1;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>萬年曆</title>
</head>
<body>
<table>
    <tr>
        <td colspan="7"><?=$y;?> 年</td>
        <td colspan="7"><?=$m;?> 月</td>
        <br>
    </tr>
    <tr>
        <td>日</td>
        <td>一</td>
        <td>二</td>
        <td>三</td>
        <td>四</td>
        <td>五</td>
        <td>六</td>
    </tr>
    <?php
$firstDay="$y-$m-01";
$firstDayWeek=date("w",strtotime($firstDay));
$monthDays=date("t",strtotime($firstDay));

for($i=0;$i<6;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){
        if($i==0 && $j<$firstDayWeek){
            echo "<td>";
            echo "</td>";
        }else{
            echo "<td>";
            $num=$i*7+$j+1-$firstDayWeek;
            if($num<=$monthDays){
                echo $num;
            }
            echo "</td>";
        }
    }
    echo "</tr>";   
}    
?>
    </table>
    
    <a href="test2.php?month=<?php echo $prevM;?>&year=<?=$y?>">上一月</a>
    <a href="test2.php?month=<?php echo $nextM;?>&year=<?=$y?>">下一月</a>
    
</body>