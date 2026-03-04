<?php

$servername="localhost";
$username="root";
$password="";
$db_name="card";


$link=mysqli_connect($servername,$username,$password,$db_name);

if(!$link){
    die(mysqli_connect_error());
}
else{
   
}



?>