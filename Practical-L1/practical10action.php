<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 10</title>
    <link href="../css/style.css"rel="stylesheet" type="text/css">
    <link href="../css/header.css"rel="stylesheet" type="text/css">
    <style>
      a.btn{
        text-decoration: none;
      }
    </style>
</head>
<body>
  <?php include '../header.php';?> 
 
  <div class="container">
    <h1 class="title">Pratical 10</h1>

    <h2>Result:</h2>
    <div class="resultbox">
      <?php
          if(empty($_POST['num1'])){
            echo '<a href="practical10.php" class="btn">BACK</a> ';
            die("<p>Enter Number 1.</p>");
          }
      
          if(empty($_POST['num2'])){
            echo '<a href="practical10.php" class="btn">BACK</a> ';
            die("<p>Enter Number 2.</p>");
          }
      
          $num1=$_POST['num1'];
          $num2=$_POST['num2'];
          $res= $_POST['res'];
          
          $result=$num1/$num2;
          
          echo "<p>Number 1: ".$num1."</p>";
          echo "<p>Number 2: ".$num2."</p>";
          
          if($res=='round')
          echo "<p>Result: ".round($result)."</p>";
          else
          echo "<p>Result: ".$result."</p>";
      ?>
    </div>
    <a href="practical10.php" class="btn">BACK</a> 
  </div>

  <script src="../css/script.js"></script>
</body>
</html>  
