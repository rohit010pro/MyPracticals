<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 13</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/header.css" rel="stylesheet">
</head>
<body>
  <?php include '../header.php';?>
  <div class="container"> 
   <h1 class="title">Practical 13</h1>
   
    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
       <h2>Merging Values</h2>
       <p>Write a PHP script to Merg two integer arrays. Find the maximum and minimum number for resultant array.</p> 
      </div>
    </div>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
       <label class="label">Enter Numbers Seperated by ' , ' for Array 1:</label>
       <textarea class="input" name="numbers1">10,20,30,40,50</textarea>
       <label class="label">Enter Numbers Seperated by ' , ' for Array 2:</label>
       <textarea class="input" name="numbers2">60,70,80,90,100</textarea>
       <input class="btn" type="submit" name="submit">
    </form>

    <div class='resultbox'>
    <?php
      function printArray($array){
        echo "<ul>";
        foreach($array as $val)
         echo "<li>".$val."</li>";
        echo "</ul>"; 
      }

      function mergArray($array1,$array2){
        $array3=Array(); 
        $c=0;
        for($i=0;$i<count($array1);$i++)
         $array3[$c++]=$array1[$i];

        for($j=0;$j<count($array2);$j++)
         $array3[$c++]=$array2[$j]; 

        return $array3; 
      }
      
      function minMax(&$min,&$max,$array){
          $min = $array[0];
          $max = $array[0];
          foreach($array as $val){
            if($val > $max)
              $max = $val; 
            if($val < $min)
              $min = $val;   
          }    
      }

      if(isset($_POST['submit']))
      {
        $numbers1 = $_POST['numbers1'];
        $array1 = explode(',',$numbers1); 
        $numbers2 = $_POST['numbers2'];
        $array2 = explode(',',$numbers2);   
        
          echo "<p>Entered values for Array 1 are:</p>";
          printArray($array1);
          echo "<p>Entered values for Array 2 are:</p>";
          printArray($array2);
          $array3 = mergArray($array1,$array2);
          echo "<p>Merged Array:<p>";
          printArray($array3);

        $min=0; $max=0;  
        minMax($min,$max,$array3);
        echo "<p><b>Minimum Value:</b>$min</p>";
        echo "<p><b>Maximum Value:</b>$max</p>";
      } 
    ?>
    </div>
  </div>   

  <script src="../css/script.js"></script>
</body>
</html>