<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 17</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/header.css" rel="stylesheet">
</head>
<body>
 <?php include '../header.php';?>
  <div class="container"> 
    <h1 class="title">Practical 17</h1>

    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
       <h2>LowerCase Converter</h2>
       <p>Write a PHP script to convert string into LowerCase.</p> 
      </div>
    </div>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <label class="label">Enter a Text in UpperCase:</label>
      <textarea class="input" type="text" name="string" placeholder="Eg: PHP IS A PROGRAMMING LANGUAGE."></textarea>
      <input class="btn" type="submit" name="submit">
    </form>
    
    <?php
      function toLowerCase($string){
        $chArr = str_split($string);
          $newStr='';
          foreach($chArr as $ch) 
          {
            $ascii = ord($ch);
            if($ascii>=65 && $ascii<=90) 
              $newStr.= chr($ascii+32);
            else
              $newStr.= $ch;  
          }
          return $newStr;
      }
      if(isset($_POST['submit']))
      {
        $string = $_POST['string'];
      
        echo "<div class='resultbox'>";
         echo "<p><b>Entered String:</b>  ".$string."</p>";
         echo "<p><b>Converted to LowerCase:</b>  ".toLowerCase($string)."</p>";
        echo "</div>"; 
      }
    ?> 
  </div> 

  <script src="../css/script.js"></script>
</body>
</html>