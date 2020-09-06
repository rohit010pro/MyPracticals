<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/header.css" rel="stylesheet" type="text/css">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <title>Practical 4</title>  
</head>
<body>

  <?php include '../header.php'; ?>
  
  <div class="container">
    <h1 class="title">Practical 4</h1> 

    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
       <h2>Even or Odd</h2>
       <p>Write a PHP script to check whether number is Even or Odd.<br>[Initialize numbers within the script]</p> 
      </div>
    </div>

    <div class="resultbox">
     <?php    
        $number = 33;
        echo "<p>Number: $number</p>";
        if($number%2)
          echo "<p>Number is ODD.</p>";
        else
          echo "<p>Number is EVEN.</p>"; 
     ?> 
    </div>
  </div>
     
  <script src="../css/script.js"></script>
</body>
</html>