<?php 
session_start();
if(($_SESSION["username"]=="t")||($_SESSION["username"]=="p")){

}else{
    header("location:error.php");
}

?>
<html>
<head>
<meta charset="utf-8">
<title>老師</title>
</head>
<body>

<a href="student.php">學生的網頁</a>
<a href="logout.php">登出</a>
</body>
</html>
