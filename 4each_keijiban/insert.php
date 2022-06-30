<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
$pdo -> exec("insert into 4each_keijiban(handlename,title,coments)
values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['coments']."');");
header("Location:http://localhost/4each_keijiban/index.php");
?>
