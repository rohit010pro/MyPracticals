<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 8</title>
    <link href="../css/header.css" rel="stylesheet" type="text/css">
    <link href="../css/style.css" rel="stylesheet" type="text/css">    
</head>
<body>
  
 <?php include '../header.php';?>
   
  <div class="container">
    <h1 class="title">Pratical 8</h1>

    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
       <h2>Addtion Operation</h2>
       <p>Create a PHP application which will accept two integer numbers through textBox on one page and display result of addition on second page.</p> 
      </div>
    </div>
   
    <form action="practical8action.php" method="POST">
      <label class="label" for="num1">Number 1:</label>  
      <input class="input" id="num1" type="number" value="10" name="num1">
      <label class="label" for="num2">Number 2:</label>  
      <input class="input" id="num2" type="number" value="20" name="num2">
      <input class="btn" type="submit" value="Submit"> 
    </form> 

  </div>
    
  <script src="../css/script.js"></script>
</body>
</html>


  