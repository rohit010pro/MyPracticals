<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 23</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/header.css" rel="stylesheet">
    <style>
     .resultbox{
       height: 100%;
       padding: 100px 20px;
       background: linear-gradient(orange,white,green);
     }
     .resultbox p{
       font-size: 1.3rem;
       line-height: 1.4;
       color: blue;
       font-family: Verdana, Geneva, Tahoma, sans-serif;
     }
    </style>
</head>
<body>
  <?php include '../header.php';?>
  <div class="container">  
  <h1 class="title">Practical 23</h1>

    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
       <h2>Day Finder</h2>
       <p>Find out on which day Republic Day and Independence day will come in current year.</p> 
      </div>
    </div>

    <div class='resultbox'>
      <?php
          date_default_timezone_set("Asia/kolkata");
          echo "<p>In ".date("Y").",</p>";       
          echo "<p>Republic Day is on ". date("l",mktime(0,0,0,1,26,2020))."</p>";
          echo "<p>Independence Day is on ".date("l",mktime(0,0,0,8,15,2020))."</p>";
      ?>
    </div>
  </div> 

  <script src="../css/script.js"></script>  
</body>
</html>