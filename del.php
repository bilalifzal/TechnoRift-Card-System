<?php
include("connect.php");


$id=$_GET['id']??'';

$query="DELETE FROM user WHERE `User id`='$id'";
$result=mysqli_query($link,$query);
if($result){
    header("location:card.php");
}




?>