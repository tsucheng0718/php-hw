<meta charset="UTF-8">
<?php
$gender=$_POST["gender"];
$willing=$_POST["willing"];
$studentID=$_POST["studentID"];
$name=$_POST["name"];
$tel=$_POST["tel"];
$email=$_POST["email"];
$beef=$_POST["beef"];
$pork=$_POST["pork"];
$chicken=$_POST["chicken"];
$shrimp=$_POST["shrimp"];
$corn=$_POST["corn"];
$ingredient=$_POST["ingredient"];
$comment=$_POST["comment"];
if(isset($studentID)){      
    echo "學號: ".$studentID."<br/>";
}else{
    echo "資料輸入錯誤";
}
if(isset($name)){  
    echo "姓名: ".$name."<br/>";
}
if($gender=="male"){
    echo "性別: 男"."<br/>";
}else{
    echo "性別: 女"."<br/>";
}
if($willing=="yes"){
    echo "參加意願: 參加"."<br/>";
}else{
    echo "參加意願: 不參加"."<br/>";
}
if(isset($tel)){
    echo "電話號碼: ".$tel."<br/>";
}
if(isset($email)){
    echo "email: ".$email."<br/>";
}
echo "這次食材中想吃的: ";
if(isset($beef)){
    echo "牛肉 ";
}
if(isset($pork)){
    echo "豬肉 ";
}
if(isset($chicken)){
    echo "雞肉 ";
}
if(isset($shrimp)){
    echo "蝦子 ";
}
if(isset($corn)){
    echo "玉米 ";
}
echo "<br/>";
echo "烤肉喜歡吃啥: ";
foreach($ingredient as $value){
    echo $value." ";
}
echo "<br/>";
echo "建議:"."<br/>";
echo nl2br(strip_tags($comment));

?>