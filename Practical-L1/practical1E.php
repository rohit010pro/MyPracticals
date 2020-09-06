<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webpage 5</title>
    <link href="../css/header.css" type="text/css" rel="stylesheet">  
<style>
   body{
    font-family:"Tahoma",sans-serif;
    /* background:#333; */
    color:#fff; 
    padding: 100px 20px 50px 20px;
 }
 .table{
     float: left;
     width:33.3%;
     padding:8px;
     box-sizing: border-box;
     transition: .3s;
 }
 .price-box{
     background: #fff;
     color:#555;
     list-style-type: none;
     border:1px solid #555;
     margin: 0;
     padding: 0;
 }
 .price-box:hover,.price-box.best{
     box-shadow:0 10px 15px 0 #000;
 }
 .price-box .header{
     background-color: #000;
     color:#fff;
     font-size: 25px;
 }
 .price-box .header.head-green{
     background-color: #4CAF50;
     color:#fff;
     font-size: 25px;
 }
 .price-box .main{
     background-color:#f4f4f4ef;
 }
 .price-box li{
     padding: 20px;
     border:1px solid #eee;
     text-align: center;
 }
 .button{
   text-decoration:none;
   border:none;
   color:#fff;
   padding:10px 15px;
   background-color:#4CAF50;
   font-size:18px;
   text-align: center;
 }
 @media(max-width:700px)
 {
  .table{
     width:100%; 
  }   
 }
</style>    
</head>
<body>
    
   <?php include '../header.php';?>  

   <div class="table">
    <ul class="price-box">
       <li class="header">Simple</li>
       <li class="main"><b>$ 5.99</b> / Month</li>
       <li><b>20GB</b> Disk Space</li>
       <li><b>10GB</b> Data Transfer</li>
       <li><b>2</b> Domains</li>
       <li><b>50</b> Email Accounts</li>
       <li><b>2</b> FTP Accounts</li>
       <li class="main"><a href="#" class="button">Sign Up</a></li>
    </ul>
    </div>
    <div class="table">
    <ul class="price-box best">
        <li class="header head-green">Standard</li>
        <li class="main"><b>$ 15.99</b> / Month</li>
        <li><b>75GB</b> Disk Space</li>
        <li><b>50GB</b> Data Transfer</li>
        <li><b>10</b> Domains</li>
        <li><b>100</b> Email Accounts</li>
        <li><b>Unlimited</b> FTP Accounts</li>
        <li class="main"><a href="#" class="button">Sign Up</a></li>
     </ul>
    </div>
    <div class="table">
     <ul class="price-box">
        <li class="header">Simple</li>
        <li class="main"><b>$ 25.99</b> / Month</li>
        <li><b>120GB</b> Disk Space</li>
        <li><b>100GB</b> Data Transfer</li>
        <li><b>Unlimited</b> Domains</li>
        <li><b>Unlimited</b> Email Accounts</li>
        <li><b>Unlimited</b> FTP Accounts</li>
        <li class="main"><a href="#" class="button">Sign Up</a></li>
     </ul>
     </div>

     <script src="../css/script.js"></script>
   </body>
</html>