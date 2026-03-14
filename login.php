<?php
include("connect.php");

if(isset($_POST['submit'])){
    $mail="";
    $pass="";



    $query="SELECT `User id` FROM user WHERE Email='".mysqli_real_Escape_string($link,$mail)."' LIMIT 1";
    $result=mysqli_query($link,$query);
    if(mysqli_num_rows($result)>0){
  echo"<div class='success-popup' style='background: #3eaa57ff;'>
                <span>Emploeyey Added Successfully. Thanks For Your Corporation.</span>
                
              </div>";
              header("location:card.php");


    }
 else{
        
  echo"<div class='success-popup' style='background: #ac5858ff;'>
                <span>
               User Not Found!.  </span>
              </div>";
    }
}
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
                <!-- <li class="set"><button type="button" class="btn btn-primary position-relative" onclick="resetNotification()">
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
</button></li> -->
            </ul>
        </div>
    </div>
</nav>

    
        <div class="container log" >
            <form action="" method="post">
            <img src="technorift.png" alt="">
            <h2 >Login <span style="color:black">Now</span></h2>
            <input type="email" placeholder="Enter Your Email" name="email" class="form-control"><br>
            <input type="password" name="password" id="" placeholder="Enter Password" class="form-control">
            <br>
            <p>Create Account <a href="sing.php"><strong>Sing Up</strong></a></p>
      <button class="btn btn-primary" name="submit">Login</button>
      </form>
        </div>


    <footer style="margin-top: 130px;">
    
        <div class="footer-1">
 <h1>TechnoRift</h1>
        </div>
         
        <div class="footer-2">
            <ul>
                <li><h3>Company</h3></li>
                <li><p>Home</p></li>
                <li><p>About us</p></li>
                <li><p>Contact us</p></li>
                <li><p>Featues</p></li>
            </ul>
        </div>


          <div class="footer-3">
            <ul>
                <li><h3>Support</h3></li>
                <li><p>FAQs</p></li>
                <li><p>Help Center</p></li>
                <li><p>Contact Support</p></li>
            </ul>
        </div>


           <div class="footer-4">
            <ul>
                <li><h3>Legal</h3></li>
                <li><p>privacy Policy</p></li>
                <li><p>Terms Of Use</p></li>
                <li><p>Disclaimer</p></li>
            </ul>
        </div>




       
    </footer>
  


      <div class="sub-footer" style="color: white ; text-align: center; background: linear-gradient(to right,
#212024
,
#287a9a ); padding: 10px;" >
<!-- <hr style="width: 100%; color: white; height: 3px;"> -->
    <p>All Rights Reserved By M.bilal Ifzal || mbilalifzal82@gmail.com</p>

      <a href="">
    <i class="fa-brands fa-facebook"></i></a>
    <a href="">
    <i class="fa-brands fa-linkedin"></i></a>
    <a href="">
   <i class="fa-brands fa-square-instagram"></i></a>
   <a href="">
    <i class="fa-solid fa-envelope"></i></a>
</div>


<style>
    .success-popup {
            position: fixed;
            width: 400px;
            text-align:center;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            background: #2ecc71;
            color: white;
            padding: 15px 25px;
            border-radius: 5px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            display: flex;
            align-items: center;
            animation: fadeIn 0.5s, fadeOut 0.5s 2.5s forwards;
        }
        
        .success-popup span {
            margin-right: 10px;
            font-size: 18px;
            text-align:center;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; top: 0; }
            to { opacity: 1; top: 20px; }
        }
        
        @keyframes fadeOut {
            from { opacity: 1; top: 20px; }
            to { opacity: 0; top: 0; }
        }


        .log{
            width: 400px;
            text-align:center;
            margin-left:35%;
            aling-items:center;
            
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }
        .log input{
            width: 100%;
        }
        .log h2{
            margin-top:10px;
            font-weight:700;
            color:rgba(67, 168, 219, 0.83);
        }
        .log button{
            width: 70%;
            margin-left:0%;
        }
    .log button :hover{}
</style>






</body>
