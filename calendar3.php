<?php
// 某年
$year=$_GET['y']?$_GET{'y'}:date('Y',time());

// 某月
$month=$_GET['m']?$_GET['m']:date('n',time());

// 本月總天數
$days=date('t',strtotime("{$year}-{$month}-1"));

// 本月1號是周幾
$week=date('w',strtotime("{$year}-{$month}-1"));

// 真正的第一天
$first=1-$week;

echo $first;

//月數大於12月年+1，月變成1月
if($month>=12){
    //下一年和下一月
    $nextYear=$year+1;
    $nextMonth=1;
}else{
    //下一年和下一月
    $nextYear=$year;
    $nextMonth=$month+1;
}
//月數小於1月份時，則年-1，月變成12月
if($month<=1){
    //下一年和下一月
    $prevYear=$year-1;
    $prevMonth=12;
}else{
    //下一年和下一月
    $prevYear=$year;
    $prevMonth=$month-1;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>萬年曆</title>
    <style>
    h1,h2{
        text-align: center;
    }
    h1{
        color: #555;
    }
    a{
        color: #99f;
    }
    table{
        margin: 0 auto;
        width: 1000px;
        border: 2px solid #272822;
        border-collapse: collapse;
    }
    td,th{
        border: 2px solid #272822;
        
    }
    th{
        color:#c00;
        font-weight: bold;
    }
    </style>
</head>
<body>
    <h1>萬年曆-<?php echo $year ?>年-<?php echo $month ?>月</h1>
    <table>
        <tr>
            <th>週日</th>
            <th>週一</th>
            <th>週二</th>
            <th>週三</th>
            <th>週四</th>
            <th>週五</th>
            <th>週六</th>
        </tr>
       <?php 
       for($i=$first;$i<=$days;){
            echo '<tr>';
            for($j=0;$j<7;$j++){
                if($i<=$days && $i>=1){
                    echo "<td>{$i}</td>";
                }else{
                    echo "<td>$&nbsp</td>";
                }
                $i++;
            }
            echo '</tr>';

       }
       ?>
    </table>
    <h2>
        <a href="index.php?y=<?php echo $prevYear ?>&m=<?php echo $prevMonth ?>">上一月</a>
        <a href="index.php?y=<?php echo $nextYear ?>&m=<?php echo $nextMonth ?>">下一月</a>
    </h2>
</body>
</html>