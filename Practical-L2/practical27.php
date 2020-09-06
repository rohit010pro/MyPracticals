<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 27</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/header.css" rel="stylesheet">
</head>
<body>
  <?php include '../header.php';?>
  <div class="container">  
  <h1 class="title">Practical 27</h1>

    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
       <h2>Age Finder</h2>
       <p>Write a PHP script to find age of a person. Take necessary inputs from user.</p> 
      </div>
    </div>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <label class="label">Select Your Date of Birth:</label>
      <input class="input" type="date" name="dob">
      <input class="btn" type="submit" name="submit">
    </form>
    <div class="resultbox">
      <?php
        if(isset($_POST['submit']))
        { 
           date_default_timezone_set("Asia/kolkata");   
            $dob = $_POST['dob'];

            $dob = strtotime($dob);
            $crtDate = mktime(0,0,0,date("m"),date("d"),date("Y"));
            
            $diff = $crtDate - $dob;

            $years = floor($diff/(60*60*24*365));
          
            $rem = $diff % (60*60*24*365);
          
            $months = floor($rem/(60*60*24*30));

            $rem = $rem % (60*60*24*30);

            $days = floor($rem/(60*60*24)); 

            echo "<p><b>Your Date of Birth: </b>".date("d-m-Y",$dob)."</p>";
            echo "<p><b>Your Age: </b>".$years." years, ". $months." months, ".$days ." days.</p>";
        }
      ?>
    </div>
  </div> 
  
  <script src="../css/script.js"></script>
</body>
</html>