<?php ob_start(); ?>
<head>
<title>警告!!</title>
</head>
<body>
非法登入，3秒後將跳轉到登入頁面或點選下方按鈕<br/>
<a href="login.php">click here</a>
<?php
header("Refresh:3;url=login.php");
?>
</body>
<?php ob_flush() ?>