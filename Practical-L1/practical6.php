<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/header.css" rel="stylesheet" type="text/css">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <title>Practical 6</title>
</head>

<body>
  <?php include '../header.php';?>
  
  <div class="container">
    <h1 class="title">Pratical 6</h1>

    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
       <h2>While Loop</h2>
       <p>Write a PHP script to print numbers from 1 to 50 using while loop.</p> 
      </div>
    </div>

    <div class="resultbox">
      <ul>
        <?php
            $num = 0;
            while(++$num <= 50)
            echo "<li>".$num."</li>";
        ?> 
      </ul>
    </div> 
  </div>
    
  <script src="../css/script.js"></script>
</body>
</html>