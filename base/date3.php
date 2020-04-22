
<table>
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
$firstDay="2020-05-01";

$firstDayweek = date("w",strtotime($firstDay));
$monthDays = date("t",strtotime($firstDay));

echo $firstDayweek;
echo $monthDays;

for($i=0;$i<6;$i++){
    echo "<tr>";

    for($j=0;$j<7;$j++){
        if($i=0 && $j<$firstDayweek){
            echo "<td>";
            echo "</td>";
        }else{

        echo "<td>";
        $num=$i*7+$j+1-$firstDayweek;
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
