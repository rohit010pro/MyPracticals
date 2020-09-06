<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/header.css" rel="stylesheet" type="text/css">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <title>Practical 3</title>
   </head>
<body>

  <?php include '../header.php';?>

  <div class="container">
    <h1 class="title">Practical 3</h1>
       
    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
       <h2>Addtion Operation</h2>
       <p>Write a PHP script to display Addition of two Numbers.<br>[Initialize numbers within the script.]</p> 
      </div>
    </div>

    <div class="resultbox">
      <?php
        $number1 = 33;
        $number2 = 17;
        $sum = $number1 + $number2;
        echo "<p>Number 1: ".$number1."</p>";
        echo "<p>Number 2: ".$number2."</p>"; 
        echo "<p>Addition: ".$sum."</p>";
      ?>
    </div>
  </div>
    
  <script src="../css/script.js"></script>
</body>
</html>
