<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 30</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/header.css" rel="stylesheet">
    <style>
      .inline{
        display: inline-block;
      }
      .btn{
         margin-top: 20px;
         margin-right: 17px;
       }
    </style>
</head>
<body>
  <?php include'../header.php';?>
  <div class="container"> 
   <h1 class="title">Practical 30</h1>
   
   <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
       <h2>Random Prime Numbers</h2>
       <p>Design webpage using different GUI objects. Print 10 random numbers from given range. If the number is prime then apply background color as a color selected by user.</p> 
      </div>
    </div>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <label class="label">Enter Starting Number:</label>
      <input class="input" type="number" name="num1" value="1">
      <label class="label">Enter Ending Number:</label>
      <input class="input" type="number" name="num2" value="1000">
      <label class="label inline">Select Prime Number Color :</label>
      <input type="color" name="color" value="#85f51c"><br>
      <input type="submit" name="submit" class="btn">
      <input type="reset" name="reset" class="btn reset">
    </form>

    <?php
     function isPrime($num){
        for($i=2;$i<$num;$i++)
        if($num%$i == 0)
          return false;        
        return true;  
     }
     
     if(isset($_POST['submit']))
     {
      $num1 = $_POST['num1']; 
      $num2 = $_POST['num2'];  
      $color = $_POST['color'];  
    ?>
    <div class="resultbox">
    <table>
      <thead>
        <tr>
          <th>Sr. No.</th>
          <th>Numbers</th>
        </tr>
      </thead>
      <tbody>
       <?php 
          for($i=1;$i<=10;$i++)
          {
            $randNum = rand($num1,$num2); 
            echo "<tr>";
              echo "<td>".$i."</td>";
              if(isPrime($randNum))
              echo "<td style='background-color:$color;'>".$randNum."</td>";
              else 
              echo "<td>".$randNum."</td>";
            echo "</tr>";  
          }
        ?>
      </tbody>
    </table>
    </div>
    <?php } ?>
  </div> 
  
  <script src="../css/script.js"></script>
</body>
</html>