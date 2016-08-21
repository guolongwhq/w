<?php
$title=$_GET["title"];
$con=$_GET["con"];
new mysqli("localhost","root","","lists");
$sql="insert into message (title,con) values ('{$title}','{$con}')";
$db->query($sql);
if($db->affected_rows>0){
    include"notice.html";
}
?>