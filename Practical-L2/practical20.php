<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 20</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/header.css" rel="stylesheet">
</head>
<body>
  <?php include '../header.php';?>

  <div class="container"> 
    <h1 class="title">Practical 20</h1>

    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
       <h2>Duplicate Numbers</h2>
       <p>Write a PHP function to find duplicate values from given array.</p> 
      </div>
    </div>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
       <label class="label">Enter Numbers Seperated by ' , ':</label>
       <textarea class="input" name="numbers">10,20,30,40,50</textarea>
       <input class="btn" type="submit" name="submit">
    </form>
    <div class='resultbox'>
    <?php

      function printArray($array){
        echo "<ul>";
        foreach($array as $val)
         echo "<li>". $val . "</li>";
        echo "</ul>"; 
      }

      function tointArray($numbers){
        $array = array();  
        for($i=0;$i<count($numbers);$i++)
          $array[$i]=intval($numbers[$i]);
        return $array;  
      }

      function duplicateNums($array)
      {
         $newArray = array();

         $len = count($array);
         for($i=0; $i<$len; $i++)
         {
            for($j=0; $j<$len; $j++)
            {
              if($i==$j) continue;
              if($array[$i] == $array[$j]){
                if(!in_array($array[$i],$newArray)){
                  $newArray[] = $array[$i];
                  break;
                }
              } 
            }
         } 
         return $newArray;
      }
      function uniqueNums($array)
      {
        $uniqueArr = array();
        for($i=0; $i<count($array); $i++)
        {
          if(!in_array($array[$i],$uniqueArr))
            $uniqueArr[]=$array[$i]; 
        }   
        return $uniqueArr;
      }

      if(isset($_POST['submit']))
      {
        $numbers = $_POST['numbers'];
        $numbers = explode(',',$numbers);    
        $array = tointArray($numbers);

        echo "<p>Entered Values are:</p>";
        printArray($array);

        $duplicateNums = duplicateNums($array); 
        if(count($duplicateNums)){
         echo "<p>Duplicate(Occurs Multiple times) Numbers are:</p>"; 
         printArray($duplicateNums);
        }else{
          die("<p>No Duplicate Values.</p>");
        }
        
        $uniqueNums = uniqueNums($array); 
        echo "<p>Unique Numbers are:</p>"; 
        printArray($uniqueNums); 
      } 
    ?>
   </div>
  </div> 

  <script src="../css/script.js"></script> 
</body>
</html>