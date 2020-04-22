

<?
echo str_repeat("good", 20);

$str1="The reason why a great man is great is that he resolves to be a great man";

$strArray=explode(" ",$str1);
echo "<pre>";
print_r($strArray);
echo"</pre>";

$str2=join(" ", $strArray);
echo "$str2";

echo"<br/>";
echo implode(" ", $strArray);

echo"<br/>";


$str3=mb_substr($str1,0,10);
echo $str3 . "....";
echo"<br/>";




