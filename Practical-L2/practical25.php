<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 25</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/header.css" rel="stylesheet">
    <style>
     .resultbox{
       padding-top: 50px;
     }
     .resultbox p{
       font-size: 1.4rem;
       line-height: 1.5;
       text-align: center;
       font-family: Verdana, Geneva, Tahoma, sans-serif;
     }
     p.date{
       display: block;
       font-size: 2.7rem;
       font-weight: bold;
       margin-bottom: 20px;
     }
    </style>
</head>
<body>
  <?php include '../header.php';?>
  <div class="container">  
    <h1 class="title">Practical 25</h1>

    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
       <h2>Current Date</h2>
       <p>Write a PHP script to print current date in dd-mm-yyyy format.</p> 
      </div>
    </div>

    <div class='resultbox'>
      <?php
          date_default_timezone_set("Asia/kolkata");
          //echo  "<p class='date'>".date('h:i:s')."</p>";
          echo "<p class='date'>".date('d-m-Y')."</p>";
          echo "<p>Today's Date</p>";
          // echo '<meta http-equiv="refresh" content="1">';
          // header("Refresh: 1;");    
      ?>
    </div>  
  </div>  
  
  <script src="../css/script.js"></script>
</body>
</html>