<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 9</title>
    <link href="../css/style.css" type="text/css" rel="stylesheet">
    <link href="../css/header.css" type="text/css" rel="stylesheet">   
</head>
<body>
  <?php include '../header.php';?>
   
    <div class="container">
      <h1 class="title">Pratical 9</h1> 
      
    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
       <h2>Calculator</h2>
       <p>Create a PHP application which will accept two integer numbers through textBox and choice of operation(+,-,*,/) through seletion box on one page and display result of operation on second page.</p> 
      </div>
    </div>
      
      <form action="practical9action.php" method="POST">
        <label class="label" for="num1">Number 1:</label>  
        <input class="input" id="num1" type="number" value="10" name="num1">
        <label class="label" for="num2">Number 2:</label>  
        <input class="input" id="num2" type="number" value="20" name="num2">
        <label class="label" for="optr">Operator:</label>
        <select class="input" name="optr" id="optr">
          <option value="" selected disabled>Select</option>  
          <option value="+">Addition</option>
          <option value="-">Substraction</option>
          <option value="*">Multiplication</option>
          <option value="/">Division</option> 
        </select>
        <input class="btn" type="submit" value="Submit"> 
      </form>     
    </div>

  <script src="../css/script.js"></script>
</body>
</html>