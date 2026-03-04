<?php

include("connect.php");


$id=$_GET['id']??'';

$query="SELECT * FROM user WHERE `User id`='$id'";
$result=mysqli_query($link,$query);

$row=mysqli_fetch_array($result);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technofit Employee Card</title>
   
   
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    

    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            
            /* min-height: 100vh; */
            /* background: linear-gradient(135deg, #e0f7ff 0%, #a6d5ff 100%); */
            padding: 20px;
        }
        
        .card-container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }
        
        .card {
            width: 320px;
            background: linear-gradient(to bottom, #c2e9ff, #a1d6ff);
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            transition: transform 0.3s ease;
            border: 1px solid #89c2ff;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        }
        
        .card-header {
            background: linear-gradient(to right, #ffffff, #ffffff);
            color: white;
            padding: 10px;
            text-align: center;
            position: relative;
            border-bottom: 2px solid #89c2ff;
            align-items: center;
            text-align: center;
        }
        .card-header img{
            margin-top: 30px;
          filter: drop-shadow(2px 2px 2px 2px black);
          width: 140px;
        }
        
        .company-name {
            font-size: 24px;
            font-weight: bold;
            letter-spacing: 1px;
            margin-bottom: 5px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }
        
        .card-title {
            font-size: 14px;
            opacity: 0.9;
        }
        
        .card-body {
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .photo-container {
            width: 120px;
          
            height: 110px;
            border-radius: 8px;
            overflow: hidden;
            border: 3px solid #3498db;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;

        }

        .photo-container img{
            width: 120px;
            height:110px;
        }
        
        .employee-photo {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .employee-info {
            width: 100%;
        }
        
        .info-row {
            display: flex;
            margin-bottom: 12px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 6px;
            padding: 8px 12px;
            align-items: center;
        }
        
        .info-icon {
            width: 24px;
            text-align: center;
            margin-right: 10px;
            color: #1bde10;
        }
        
        .info-label {
            font-weight: 600;
            color: #2c3e50;
            width: 110px;
            font-size: 14px;
        }
        
        .info-value {
            flex: 1;
            color: #34495e;
            font-size: 14px;
            font-weight: 500;
        }
        
        .card-footer {
            background: linear-gradient(to right, #2980b9, #3498db);
            padding: 15px 20px;
            text-align: center;
            border-top: 2px solid #89c2ff;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .expiry-date {
            font-style: italic;
            font-size: 13px;
            text-align: left;
        }
        
        .card-id {
            font-weight: bold;
            letter-spacing: 1px;
            text-align: right;
        }
        
        .blood-group {
            display: inline-block;
            background: #ff5252;
            color: white;
            padding: 3px 10px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 14px;
            margin-left: 5px;
        }
        
        .logo {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 24px;
            color: rgba(255, 255, 255, 0.8);
        }

        <style>
 
    @media print {
        body * {
            visibility: hidden;
        }
        .card-container, .card-container * {
            visibility: visible;
        }
        .card-container {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: center;
        }
        .card {
            box-shadow: none;
            border: 1px solid #000;
        }
        
        /* Hide print button when printing */
        button, a {
            display: none !important;
        }
    }

    </style>
</head>
<body>




    <div class="card-container">
        
        <div class="card">
            <div class="card-header">
                <div class="company-name"><img src="technorift.png" alt="" style=" border-radius: 100px; "></div>
                <div class="card-title">Employee Identification Card</div>
                <div class="logo"><i class="fas microchip fa-microchip"></i></div>
            </div>
            
            <div class="card-body">
                <div class="photo-container">
                    <!-- <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=200&q=80" alt="Employee Photo" class="employee-photo"> -->


                    <img src="TECHCARD<?php echo $row['Pic']; ?>" alt="">
                </div>
                
                <div class="employee-info">
                    <div class="info-row">
                        <div class="info-icon"><i class="fas fa-user"></i></div>
                        <div class="info-label">Name:</div>
                        <div class="info-value">



                        <?php


echo $row['Name'];


?>
                        </div>
                    </div>
                    
                    <div class="info-row">
                        <div class="info-icon"><i class="fas fa-address-card"></i></div>
                        <div class="info-label">CNIC:</div>
                        <div class="info-value">
                            
     <?php
     echo $row['CNIC'];
     
     ?>
    </div>
                    </div>
                    
                    <div class="info-row">
                        <div class="info-icon"><i class="fas fa-home"></i></div>
                        <div class="info-label">Address:</div>
                        <div class="info-value"><?php
                        echo $row['Address'];
                        
                        ?></div>
                    </div>
                    
                    <div class="info-row">
                        <div class="info-icon"><i class="fa-solid fa-user-tie"></i></div>
                        <div class="info-label">Catagory</div>
                        <div class="info-value"><?php
                        echo $row['Catagory'];
                        
                        ?></div>
                    </div>
                    
                    <div class="info-row">
                        <div class="info-icon"><i class="fas fa-birthday-cake"></i></div>
                        <div class="info-label">Date of Birth:</div>
                        <div class="info-value"><?php
                        
                        
                        echo $row['DOB'];
                        ?></div>
                    </div>
                </div>
            </div>
            
            <div class="card-footer">
                <div class="expiry-date">Expiry: <?php
                echo $row['Exp'];
                ?></div>
                <div class="card-id">ID: TR-0<?php echo $row['User id'];?></div>
            </div>
        </div>
        
        
    </div>
<button onclick="window.print()" style="padding:12px; border:none; width:150px; background:linear-gradient(to right,
#43c6ac
, 
#191654); color:white; margin-left:45%;margin-top:40px;">Print Card</button>
   
</body>
</html>