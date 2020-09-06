<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 21</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/header.css" rel="stylesheet">
</head>
<body>
  <?php include '../header.php';?>
  <div class="container">  
  <h1 class="title">Practical 21</h1>

    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
       <h2>String Search</h2>
       <p>Write a PHP script to check if a string contains a specific string or not.</p> 
      </div>
    </div>
  
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <label class="label">Enter a Text:</label>
      <textarea class="input" name="text" placeholder="Eg: PHP is a Programming Language."></textarea><br>
      <label class="label">Enter a word to Search:</label>
      <input class="input" type="text" name="search-str" placeholder="Eg: India">
      <input class="btn" type="submit" name="submit">
    </form>
    <div class='resultbox'>
    <?php
     if(isset($_POST['submit']))
     {
        $text = $_POST['text'];
        if($text == "")
         die("<p>Please,Enter text.</p>");
        $searchStr = $_POST['search-str'];
        if($searchStr == "")
         die("<p>Please,Enter a word to Search.</p>");
        $strings = explode(" ",$text);
        //   var_dump($strings);
        echo "<p><b>Entered Text: </b>".$text."</p>"; 
        echo "<p><b>String to Search: </b>".$searchStr."</p>"; 
        // foreach($strings as $str){
        //   if(!strcmp($str,$searchStr)){
        //     echo "'".$searchStr."'" . " is present in String."; 
        //     exit();
        //   }          
        // }
        // echo "<br>Word Not found";
        if(stripos($text,$searchStr) !== false)
          die("<p class='alert success'>Search Successful.</p>");
        else
          die("<p class='alert danger'>Search Unsuccessful.</p>");  
      }
    ?>
    </div>
  </div>   

  <script src="../css/script.js"></script>
</body>
</html>