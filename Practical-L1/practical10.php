<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 10</title>
    <link href="../css/style.css" type="text/css" rel="stylesheet">
    <link href="../css/header.css" type="text/css" rel="stylesheet">
    <style>
      .round-label,.radio-label{
        display: inline-block;
        margin:5px 20px 0 0;
      }
      .btn{
        margin-top: 25px;
        display: block;
      }
    </style>
</head>
<body>

  <?php include '../header.php';?>
  
   <div class="container">
     <h1 class="title">Practical 10</h1>

    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
       <h2>Division Operation</h2>
       <p>Create a PHP application which will accept two integer numbers through textBox on one page and display result of division on second page.First page should also accept chioce for rounf the result through radio button.<br>
       (Hint: Use round() function of PHP to round the result)</p> 
      </div>
    </div>

     <form action="practical10action.php" method="POST">
        <label class="label" for="num1">Number 1:</label>  
        <input class="input" id="num1" type="number" value="10" name="num1">

        <label class="label" for="num2">Number 2:</label>  
        <input class="input" id="num2" type="number" value="20" name="num2">

        <label class="round-label">Result Round ?:</label>
        <label class="radio-label"><input type="radio" name="res" value="round"> Yes</label>
        <label class="radio-label"><input type="radio" name="res" value="noround" checked> No</label>
        
        <input class="btn" type="submit" value="Submit"> 
     </form> 
   </div>

   <script src="../css/script.js"></script>
</body>
</html>