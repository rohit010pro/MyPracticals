<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 19</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/header.css" rel="stylesheet">
</head>
<body>
  <?php include '../header.php'; ?>
  <div class="container"> 
  <h1 class="title">Practical 19</h1>

    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
       <h2>Prime Numbers</h2>
       <p> Write a PHP function to find prime numbers between given range.</p> 
      </div>
    </div>

    <form action="" method="POST">
       <label class="label">Enter Starting Number:</label>
       <input class="input" type="number" name="num1" min="2" value="2">
       <label class="label">Enter Ending Number:</label>
       <input class="input" type="number" name="num2" min="2" value="50">
       <input class="btn" type="submit" name="submit">
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
          $num1= $_POST['num1'];
          $num2= $_POST['num2'];
          echo "<div class='resultbox'>";
          if($num1>$num2)
            die("<p>Starting Number must be Less than Ending Number.</p>");

            echo "<p><b>Prime Numbers from ".$num1." to ".$num2." are:</b></p>";
            echo "<ul>"; 
            for($i=$num1;$i<=$num2;$i++)
              if(isPrime($i))
                echo "<li>".$i."</li>";   
            echo "</ul>";
          echo "</div>";  
      }
    ?>
  </div> 
  
  <script src="../css/script.js"></script>
</body>
</html>