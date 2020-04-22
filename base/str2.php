
<h4>學會PHP網頁 <span style='color:red;font-size:36px'> 程式設計</span>，薪水會加倍，工作會好找 
</h4>

<?php
$str1="學會PHP網頁程式設計，薪水會加倍，工作會好找";

$search="程式設計";

$target="<span style='color:red;font-size:36px'> 程式設計</span>";

echo str_replace($search,$target,$str1);
echo"<br>";

$str2= strstr($str1, '程式設計');
echo $str2;




?>