<?php 
session_start();
if($_SESSION["username"]=="p"){

}else{
    header("location:error.php");
}
?>
<html>
<head>
<meta charset="utf-8">
<title>校長</title>
</head>
<body>
<a href="teacher.php">老師的網頁</a>
<a href="logout.php">登出</a>
</body>
</html>