<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php簡單日曆，單一月份</title>

</head>
<body>
    
<html>
    <meta charset="UTF-8">
    <title>日曆</title>
    <body>
        <form action="index.php" method="get">
            <table>
                <tr>
                <!-- 日期頭 -->
                    <th>日</th>
                    <th>一</th>
                    <th>二</th>
                    <th>三</th>
                    <th>四</th>
                    <th>五</th>
                    <th>六</th>
                </tr>
                <?php
                include "calendar.php";
                ?>
                <tr>
                    <th><input type="submit" value="<" name="yeardown" style="border:none;background:none;cursor:pointer;outline:none;">
                        <input type="hidden" value="<?php echo $year?>" name="year"></th>
                    <th colspan="2"><?php echo $year?></th>
                    <th><input type="submit" value=">" name="yearup" style="border:none;background:none;cursor:pointer;outline:none;"></th>
                    <th><input type="submit" value="<" name="monthdown" style="border:none;background:none;cursor:pointer;outline:none;"></th>
                    <th><?php echo $month?></th>
                    <th><input type="submit" value=">" name="monthup" style="border:none;background:none;cursor:pointer;outline:none;">
                        <input type="hidden" value="<?php echo $month?>" name="month"></th>
                </tr>
            </table>
        </form>

    </body>
</html>


 

<?php
    //先獲取日期
    if(isset($_GET['yeardown'])){  //年減少，年份往前推
        $year=$_GET['year']-1;
        $month=$_GET['month'];
        $today=date("d");
    }
    else if(isset($_GET['yearup'])){  //年增加，年份往後推
        $year=$_GET['year']+1;
        $month=$_GET['month'];
        $today=date("d");
    }
    else if(isset($_GET['monthdown'])){  //月減少，月份往前推
        $year=$_GET['year'];
        $month=$_GET['month']-1;
        $today=date("d");
        if ($month==0){          //遇到零月，年份減1，月份變12
            $month=12;
            $year--;
        }

    }
    else if(isset($_GET['monthup'])){   //月增加，月份往後推
        $year=$_GET['year'];
        $month=$_GET['month']+1;
        $today=date("d");
        if ($month==13){    //月變爲13時，年加1，月變爲1
            $month=1;
            $year++;
        }
    }
    else{       //一開始沒有傳參時，獲取當前年月日
        $year=date("Y");
        $month=date("m");
        $today=date("d");
    }

    $date=$year."-".$month."-1";             //將日期設爲該月第一天
    $day = date("w",strtotime($date));//查看該月第一天爲周幾
    $dateArray = array(array());
    $dateNew = array();
    for ($i=0;$i<6;$i++){                    //將日期都初始化爲-1
        for ($j=0;$j<7;$j++){
            $dateArray[$i][$j]=-1;
        }
    }
    $monthday=31;                                             //大月31天
    if ($month==4||$month==6||$month==9||$month==11){         //平月30天
        $monthday=30;
    }
    if ($month==2){                                            //二月單獨判斷
        $monthday=28;
        if ($year%4==0&&$year%100!=0||$year%400==0){
            $monthday=29;
        }
    }
    for ($i=0;$i<42;$i++){          //初始化二維數組爲-1
        $dateNew[$i]=-1;
    }

    for ($i=$day;$i<$day+$monthday;$i++){                       //日期對應的一維數組根據1號是周幾往後推
        $dateNew[$i]=$i-$day+1;
    }
    $k=0;


    for ($i=0;$i<6;$i++){                       //-1爲空不顯示
        echo "<tr>";
        for ($j=0;$j<7;$j++){                   //其他日期挨個打印
            $dateArray[$i][$j] = $dateNew[$k];
            $k++;
            if ($dateArray[$i][$j]==-1){  //沒顯示的天打印空
                if($i==5&$j==0)           //最後一行爲空的時候不打印
                    break;
                echo "<td></td>";
            }
            else{//當天的背景爲綠色
                if ($year==date("Y")&&$month==date("m")&&$dateArray[$i][$j]==date("d"))
                    echo "<td align='center' bgcolor='#7fff00'>".$dateArray[$i][$j]."</td>";
                else
                    echo "<td align='center'>".$dateArray[$i][$j]."</td>";
            }
        }
        echo "</tr>";
    }

?>
</body>
</html>