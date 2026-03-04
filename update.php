<?php
include("connect.php");


$id=$_GET['id']??'';


$query="SELECT * FROM user WHERE `User id` ='$id'";
$result=mysqli_query($link,$query);
$row=mysqli_fetch_array($result);



if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $mail=$_POST['email'];
    $date=date('Y-m-d',strtotime($_POST['DOB']));
    $add=$_POST['address'];
    $cat=$_POST['catt'];
    $exp=date('Y-m-d',strtotime($_POST['date']));
    $CNIC=$_POST['CNIC'];
    $pic=$_FILES['pic']['name'];

    $query="UPDATE user SET Name='$name' , Email='$mail' , DOB='$date' , Address='$add' , Catagory='$cat' , Exp='$exp' , CNIC = '$CNIC' , Pic='$pic' WHERE `User id` = '$id'";

    $result=mysqli_query($link,$query);

    if($result){
        header("location:card.php");
        move_uploaded_file($_FILES['pic']['tmp_name'],"TECHCARD" . $_FILES['pic']['name'] );
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
                <li class="set"><button type="button" class="btn btn-primary position-relative" onclick="resetNotification()">
                    <i class="fa-solid fa-bell" style="color:white; border-radius:100px; margin-top:0px;"></i>
  Inbox
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
<?php

$query="SELECT COUNT(*) AS total_users FROM user";

$result=mysqli_query($link,$query);
if($result){
    $not=mysqli_fetch_array($result);

    echo $not['total_users'];
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
    

<div class="container">
    <div class="tp-butt" style="margin-top: 30px;">
   

    </div>
    <div class="addus">
        
        <form action="" method="post" enctype="multipart/form-data">
<h1 style="color: rgb(52, 138, 196); text-align:center;">Update User Data</h1>
            <label for="" style="display: flex; gap: 320px; color: rgb(52, 138, 196);">
             <strong>Name</strong>
             <strong>Email</strong>
             <strong>Date Of Birth</strong>
            </label>
            <div class="in-1">
           
            <input type="text" name="name" id="" class="form-control" placeholder="Enter your Name" value="<?php
            echo $row['Name'];
            
            ?>">

          
            <input type="email" name="email" id="" class="form-control" placeholder="Enter your Email" value="<?php
            echo $row['Email'];
            
            ?>">   
            
            
            
            <input type="date" name="DOB" id="" class="form-control" value="<?php
            echo $row['DOB'];
            
            ?>">   








            </div>







            <label for="" style="display: flex; gap: 297px; color: rgb(52, 138, 196);">
             <strong>Address</strong>
             <strong>Catagory</strong>
             <strong>Expiry</strong>
            </label>

             <div class="in-1">

           
            <input type="text" name="address" id="" class="form-control" placeholder="Enter your Address" value="<?php
            echo $row['Address'];
            
            ?>">

          
            <select name="catt" id="" class="form-control"  value="<?php
            echo $row['Catagory'];
            
            ?>">
              
                <option value="Senior Software Engineer">Senior Software Engineer</option>

                <option value="Web Devolper">Web Devolper</option>
                <option value="App Developer">App Developer</option>
                <option value="Emploeyey">Emploeyey</option>
                <option value="Student">Student</option>
                
                <option value="Intern">Intern</option>
            </select> 
            
            
            
            <input type="date" name="date" id="" class="form-control"  value="<?php
            echo $row['Exp'];
            
            ?>">   








            </div>



             <label for="" style="display: flex; gap: 260px; color: rgb(52, 138, 196);">
             <strong>CNIC Number</strong>
             <strong>Passport size photo</strong>
             
            </label>

             <div class="in-1" style="display: flex; justify-content: left; gap: 20px;">
           
            <input type="text" name="CNIC" id="" class="form-control" placeholder="Enter your ID Card Number" value="<?php
            echo $row['CNIC'];
            
            ?>">

          
            
            
            
            <input type="file" name="pic" id="" class="form-control" value="<?php
            echo $row['Pic'];
            
            ?>">   








            </div>

               <button class="btn btn-primary" name="submit"><i class="fa-solid fa-folder-open"></i>  Update</button>
        </form>

       
    </div>
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
</style>





