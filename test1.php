<?php
$year="2020";
?>
<?php
$month = date("m");

if(isset($_GET["month"])){
    $month = $_GET["month"];
 }

?>
<table>
    <tr>
        <td colspan="7"><?=$month;?>月</td>
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
$firstDay="$year-$month-01";

$firstDayWeek=date("w",strtotime($firstDay));
$monthDays=date("t",strtotime($firstDay));

/* echo "第一天星期:".$firstDayWeek."<br>";
echo "月天數:".$monthDays."天"; */
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
    <a href="carlenderButton.php?month=<?= $month-1 ?>">上個月<?= $month-1 ?> </a> |
    <span>本月<?= $month ?> </span> |
    <a href="carlenderButton.php?month=<?= $month+1 ?>">下個月<?= $month+1 ?> </a>

