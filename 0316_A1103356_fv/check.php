<?php
session_start();
$principalID="p";
$principalPWD="111";
$teacherID="t";
$teacherPWD="222";
$studentID="s";
$studentPWD="333";
$id=$_POST["id"];
$pwd=$_POST["pwd"];
if(($principalID==$id)&&($principalPWD==$pwd)){
    $_SESSION["username"]="p";
    header("location:principal.php");
}elseif(($teacherID==$id)&&($teacherPWD==$pwd)){
    $_SESSION["username"]="t";
    header("location:teacher.php");
}elseif(($studentID==$id)&&($studentPWD==$pwd)){
    $_SESSION["username"]="s";
    header("location:student.php");
}else{
    $_SESSION["username"]="no";
    header("location:fail.php");
}
?>