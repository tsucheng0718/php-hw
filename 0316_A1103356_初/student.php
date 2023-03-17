<?php 
session_start();
if(($_SESSION["username"]=="s")||($_SESSION["username"]=="t")){

}else{
    header("location:error.php");
}
?>
<html>
<head>
<meta charset="utf-8">
<title>學生</title>
</head>
<body>
<table border="2">
<a href="https://www.nuk.edu.tw/p/412-1000-654.php?Lang=zh-tw">學生用</a>
<a href="logout.php">登出</a>
</body>
</html>