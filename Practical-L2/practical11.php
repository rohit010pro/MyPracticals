<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 11</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/header.css" rel="stylesheet">
</head>
<body> 

  <?php include '../header.php'; ?>  

  <div class="container">
    <h1 class="title">Practical 11</h1>

    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
       <h2>Email Validator</h2>
       <p>Write a PHP script to Validate an Email address entered by user without using HTML5 input type.<br>(Hint: Use string functions)</p> 
      </div>
    </div>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
       <label class="label">Enter Email:</label>
       <input class="input" type="text" name="email" class="textbox" value="my.email@gmail.com" autocomplete="off">
       <input class="btn" type="submit" name="submit" value="Check">
    </form>
          
    <?php
      
      if(isset($_POST['submit']))  
      {
        $email = $_POST['email'];
        $email = htmlentities($email);
        
        function isvalidChar($string){
          $chArr = str_split($string);
  
          foreach($chArr as $ch){
            if($ch=='.' || $ch=='_' || $ch=='-' ||
              ($ch>='a' && $ch<='z') || ($ch>='0' && $ch<='9'));
            else 
              return false;      
          }  
          return true;
        }
        
        //For Prefix or Local Part Validation
        function isPrefixValid($email){
          $atPos= strrpos($email,"@");
          $prefix = substr($email,0,$atPos);
        //  echo "Prefix: ".$prefix."<br>";
          
          if((strlen($prefix)>=5 && strlen($prefix)<=32) && isvalidChar($prefix))
            return true;
          return false;
        }
  
          //For Domain Part Validation
        function isDomainValid($email){
          $atPos= strrpos($email,"@");
          $dotPos = strrpos($email,".");
          $length= strlen($email);  
          $domain = substr($email,$atPos+1); 
          // echo "Domain: ".$domain."<br>";rohit777kanojiya@gmail.com
          if(($length-1-$dotPos)>=2 && ($dotPos-$atPos-1)>=3 && isvalidChar($domain))
             return true;
           return false;
        }

        function validateEmail($email){    
          echo "<div class='resultbox'>";
            echo "<p><b>Entered Email: </b>".$email."</p>";     
            if(isPrefixValid($email) && isDomainValid($email))
              echo "<p class='alert success'>Email is Valid</p>";
            else
              echo "<p class='alert danger'>Email is Invalid</p>";
          echo "</div>";  
        }
  
        validateEmail($email); 
      }
      // echo var_dump(validChar("aBbcd"));
    ?>  

  </div>  

  <script src="../css/script.js"></script>
</body>
</html>
