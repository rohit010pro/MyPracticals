<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 28</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/header.css" rel="stylesheet">
    <style>
      .weekend{
        background-color: orangered;
      }
      .not-weekend{
        background-color: royalblue;
      }
    </style>
</head>
<body>
 <?php include'../header.php';?>
  <div class="container"> 
    <h1 class="title">Practical 28</h1> 

    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
       <h2>Weekend Finder</h2>
       <p>Wrtie a PHP script to find whether entered date is Weekend or not.</p> 
      </div>
    </div>


    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <label class="label">Select Date:</label>
      <input class="input" type="date" name="date">
      <input class="btn" type="submit" name="submit">
    </form>

    <div class="resultbox">
      <?php
        if(isset($_POST['submit']))
        {
          $date = $_POST['date'] ;
          $unixtime = strtotime($date);
          $day = date("l",$unixtime);
          $dayNum = intval(date("N",$unixtime));
          
          echo "<p><b>Entered Date: </b>".$date." ($day)</p>";
          
          if($dayNum==6 || $dayNum==7)
            echo "<p class='alert weekend'>It's Weekend Day.</p>";
          else
            echo "<p class='alert not-weekend'>It's Not Weekend Day.</p>";  
        }
      ?>
    </div>
  </div>
  <script src="../css/script.js"></script>   
</body>
</html>