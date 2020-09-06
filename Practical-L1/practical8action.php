<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 8 (Result)</title>
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
   <h1 class="title">Pratical 8</h1>
   <div class="resultbox">
     <h2>Result:</h2>
     <?php
        if(empty($_POST['num1'])){
          echo '<a href="practical8.php" class="btn back">BACK</a> ';
          die("Enter Number 1.");
        }
    
        if(empty($_POST['num2'])){
          echo '<a href="practical8.php" class="btn back">BACK</a> ';
          die("Enter Number 2");
        }
    
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];

        $sum=$num1+$num2;
        
        echo "<p>Number 1 : ".$num1."</p>";
        echo "<p>Number 2 : ".$num2."</p>";
        echo "<p>Additon : ".$sum."</p>";
     ?>
   </div>
    <a href="practical8.php" class="btn">BACK</a>   
  </div>
    
  <script src="../css/script.js"></script>
</body>
</html>