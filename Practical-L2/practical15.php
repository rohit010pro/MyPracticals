<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 15</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/header.css" rel="stylesheet">
</head>
<body>
  <?php include '../header.php';?>
  
  <div class="container"> 
  <h1 class="title">Practical 15</h1>

    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
       <h2>Min,Max String</h2>
       <p>Write a PHP script to create an array of 20 elements which contains only string as their values. Find element having largest and smallest in length.</p> 
      </div>
    </div>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
       <label class="label">Enter a Statment:</label>
       <textarea class="input" name="text" placeholder="Eg: PHP is a Progamming Language."></textarea>
       <input class="btn" type="submit" name="submit">
    </form>
   
    <?php
      if(isset($_POST['submit']))
      {
        $text=$_POST['text'];
        $strings = explode(' ',$text);

        // $strings=["One","Two","Three","Four","Five","Six","Seven","Eight","Nine","Ten","Eleven","Twelve","Thirteen","Fourteen","Fifteen","Sixteen","Seventeen","Eighteen","Nineteen","Twenty"];
       
          $minStr=$strings[0];
          $maxStr=$strings[0];
          
          foreach($strings as $str)
          {
            if(strlen($str) > strlen($maxStr))
              $maxStr = $str;
            if(strlen($str) < strlen($minStr))
              $minStr = $str;
          }
          echo "<div class='resultbox'>"; 
           echo "<p><b>Entered Text: </b>".$text."</p>";          
           echo "<p><b>Smallest String: </b> ".$minStr."</p>";
           echo "<p><b>Largest String: </b> ".$maxStr."</p>";
          echo "</div>";
      }
    ?>
  </div> 
  
  <script src="../css/script.js"></script>
</body>
</html>