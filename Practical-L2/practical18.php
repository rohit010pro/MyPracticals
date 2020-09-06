<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 18</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/header.css" rel="stylesheet">
</head>
<body>
  <?php include '../header.php';?>
  <div class="container">  
    <h1 class="title">Practical 18</h1>

    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
       <h2>Occurances Of Alphabet</h2>
       <p>Write a PHP function to find occurances of every alphabetical character in a string.<br> (Note: Do not
cosider case of letter)</p> 
      </div>
    </div>
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <label class="label">Enter a Text:</label>
      <textarea class="input" name="text" placeholder="Eg: PHP is a Programming Language."></textarea>
      <input class="btn" type="submit" name="submit">
    </form>

    <?php
     function allocateArray($size){
       $newArray = array();
       for($i=0;$i<$size;$i++)
        $newArray[$i]=0; 
       return $newArray; 
     }
     if(isset($_POST['submit']))
     {
        $text = $_POST['text'];

        $chArray = str_split($text);
        $countLetter = allocateArray(26);
        // var_dump($chArray);
        foreach($chArray as $ch)
        {
          $ascii = ord($ch);
          if($ascii>=65 && $ascii<=90)
            $countLetter[$ascii-65]++;
          else if($ascii>=97 && $ascii<=122)  
            $countLetter[$ascii-97]++;
        }     
    ?>  
    <div class="resultbox">
     <h2>Occurences of Alphabet:</h2>
     <table>
       <thead>
         <tr>
           <th>Alphabets</th>
           <th>Frequency</th>
         </tr>
       </thead>
       <tbody>
          <?php                          
            for($i=0,$c=65,$s=97;$i<=25 && $c<=90 && $s<=122;$c++,$s++,$i++)
            { 
              if($countLetter[$i]){
                echo "<tr>";
                 echo "<td>".chr($c)." / ".chr($s)."</td>";
                 echo "<td>".$countLetter[$i]."</td>";
                echo "</tr>";
              }   
            }
          ?>
       </tbody>
     </table>
    </div>
    <?php }?>
  </div>   

  <script src="../css/script.js"></script>
</body>
</html>