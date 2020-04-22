
<h3>威力彩號產生器-while</h3>

<?

$num=[]; 
$counts=0;   

while(count($num)<6){ 
    $counts++;


    if(count($num)>0){  
        
        $tmp=rand(1,38);  
        if(!in_array($tmp,$num)){
            $num[]=$tmp;
        }else{
            echo "有重複".$tmp;
        }
    }else{
        $num[]=rand(1,38);
    }
}

 echo "<pre>";print_r($num);echo"<echo>";
 echo "跑了" .$counts. "次";
?>