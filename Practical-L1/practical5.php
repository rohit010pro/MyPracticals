<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/header.css" rel="stylesheet" type="text/css">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <title>Practical 5</title> 
</head>

<body>
  <?php include '../header.php';?>

  <div class="container">
    <h1 class="title">Pratical 5</h1>

    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
       <h2>For Loop</h2>
       <p>Write a PHP script to print numbers from 1 to 100 using for loop.</p> 
      </div>
    </div>

    <div class="resultbox">
      <ul>
        <?php
            for($num=1;$num<=100;$num++)
             echo "<li>".$num."</li>";
        ?> 
      </ul>
    </div> 
  </div>
    
  <script src="../css/script.js"></script>
</body>
</html>