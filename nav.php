<?php

include("connect.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<link rel="stylesheet" href="index.css">
    <title>Card Generator</title>
</head>
<body>
    <div class="top-nav alert-primary text-blue"  style="text-align:center; padding:12px;" >
        <!-- <marquee behavior="smoth" direction="right" scrollamount="20"> -->
        <h4>
        Welcome To TechnoRift  Card     Generating  System.

<!-- 
         Generate Card For Emploeyey Intern Student Web And App Developers -->


        </h4>
        </marquee>
    </div>
    <nav>
    <div class="n-1">
    <img src="technorift.png" alt="">
    </div>

    <div class="n-2">
        <div class="link">
            <ul>
                <li><button class="nav-btn" id="n">Admin</button></li>
                <li class="set"><i class="fa-solid fa-right-from-bracket"></i> Logout</li>
                <li class="set"><button type="button" class="btn btn-primary position-relative" onclick="resetNotification()">
                    <i class="fa-solid fa-bell" style="color:white; border-radius:100px; margin-top:0px;"></i>
  Inbox
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
<?php

$query="SELECT COUNT(*) AS total_users FROM user";

$result=mysqli_query($link,$query);
if($result){
    $row=mysqli_fetch_array($result);

    echo $row['total_users'];
}
else{
    echo"0";
}



?>
    <span class="visually-hidden">unread messages</span>
  </span>
</button></li>
            </ul>
        </div>
    </div>
    </nav>
    
