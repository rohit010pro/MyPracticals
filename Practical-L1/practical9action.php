<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 9</title>
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
    <h1 class="title">Pratical 9</h1>
    <h2>Result:</h2>
    <div class="resultbox">
      <?php
      
        if(empty($_POST['num1'])){
        echo '<a href="practical9.php" class="btn back">BACK</a> ';
        die("<p>Enter Number 1.</p>");
        }

        if(empty($_POST['num2'])){
          echo '<a href="practical9.php" class="btn back">BACK</a> ';
        die("<p>Enter Number 2.</p>");
        }

        if(empty($_POST['optr'])){
          echo '<a href="practical9.php" class="btn back">BACK</a> ';
        die("<p>Please Select Operation.</p>");
        }
        
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $optr=$_POST['optr']; 
        
        echo "<p>Number 1: ".$num1."</p>";
        echo "<p>Number 2: ".$num2."</p>";

        switch($optr)
        {
            case '+' : echo "Addition : ".($num1+$num2);
                        break;   
            case '-' : echo "substraction : ".($num1-$num2);
                        break;
            case '*' : echo "Multiplication : ".($num1*$num2);
                        break;       
            case '/' : echo "Division: ".($num1/$num2);
                        break; 
        }
      ?>
    </div>
    
    <a href="practical9.php" class="btn">BACK</a> 

  </div>

  <script src="../css/script.js"></script>
</body>
</html>  