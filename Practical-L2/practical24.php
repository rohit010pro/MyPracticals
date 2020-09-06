<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 24</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/header.css" rel="stylesheet">
    <style>
     .resultbox{
       height: 100%;
       padding: 120px 20px;
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
  <h1 class="title">Practical 24</h1>

    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
       <h2>Days Remaining</h2>
       <p>Write a PHP script to find out how many days remaining for next birthday of father of our nation Mahatma Gandhi.</p> 
      </div>
    </div>

    <?php
        date_default_timezone_set("Asia/kolkata");
        
        $dob = mktime(0,0,0,10,2,date("Y"));
        $crtDate = mktime(0,0,0,date("m"),date("d"),date("Y"));
     
        $diff = $dob - $crtDate;
        $days = round($diff/(24*60*60));
        echo "<div class='resultbox'>";
        echo "<p>In ".date("Y").",</p>";
        echo "<p>$days Days Remaining for Gandhi Jayanti.</p>";
        echo "</div>";
    ?>
  </div> 
  
  <script src="../css/script.js"></script>
</body>
</html>