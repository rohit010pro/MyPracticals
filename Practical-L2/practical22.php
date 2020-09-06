<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 22</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/header.css" rel="stylesheet">
</head>
<body>
  <?php include '../header.php';?>
  <div class="container"> 
    <h1 class="title">Practical 22</h1> 

    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
       <h2>Replace String</h2>
       <p>Write a PHP script to replace "gujarat" in following string with "india".<br>"Gujarat Is My Country" (Note: ignore case)</p> 
      </div>
    </div>

    <?php
        $text = "Gujarat is my Country";
        $strSearch = "Gujarat";
        $strReplace = "India";
        // $strings= explode(" ",$text);

        echo "<div class='resultbox'>";
         echo "<p><b>Given Text: </b>".$text."</p>";
         echo "<p><b>Word to Replace: </b>".$strReplace." with ".$strSearch."</p>";
         $result = str_ireplace($strSearch,$strReplace,$text);
         echo "<p><b>Result: </b>".$result."</p>";
        echo "</div>";

    ?>
  </div>   

  <script src="../css/script.js"></script>
</body>
</html>