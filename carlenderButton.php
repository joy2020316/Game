<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>作業說明</title>
</head>
<body>

<?php

$month = date("m");

if(isset($_GET["month"])){
    $month = $_GET["month"];
 }

?>

    <a href="carlenderButton.php?month=<?= $month-1 ?>">上個月<?= $month-1 ?> </a> |
    <span>本月<?= $month ?> </span> |
    <a href="carlenderButton.php?month=<?= $month+1 ?>">下個月<?= $month+1 ?> </a>




</body>
</html>