<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 26</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/header.css" rel="stylesheet">
</head>
<body>
  <?php include '../header.php';?>
  <div class="container">  
   <h1 class="title">Practical 26</h1>

   <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
       <h2>Date Difference.</h2>
       <p>Write a PHP script to find number of days between two given dates.</p> 
      </div>
    </div>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <label class="label">Select Date 1:</label>
      <input class="input" type="date" name="date1">
      <label class="label">Select Date 2:</label>
      <input class="input" type="date" name="date2">
      <input class="btn" type="submit" name="submit">
    </form>
    <div class="resultbox">
      <?php
        if(isset($_POST['submit']))
        {
            date_default_timezone_set("Asia/kolkata");
            
            $d1 = $_POST['date1'];
            $d2 = $_POST['date2'];
            
            $date1 = strtotime($d1);
            $date2 = strtotime($d2);
            
            $diff = $date1-$date2;

            $days = abs(round($diff/(24*60*60)));
            echo "<p><b>Entered Date 1:</b> ".date("d-m-Y",$date1)."</p>";
            echo "<p><b>Entered Date 2:</b> ".date("d-m-Y",$date2)."</p>";
            $days .=  $days >1 ? " Days" : " Day";
            echo "<p><b>Difference between two Dates:</b> ".$days."</p>";
        }
      ?>
    </div>
  </div>   

  <script src="../css/script.js"></script>
</body>
</html>