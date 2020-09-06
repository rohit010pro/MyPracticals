<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 12</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/header.css" rel="stylesheet">
</head>
<body>
  <?php include '../header.php'; ?> 
   
  <div class="container"> 
   <h1 class="title">Practical 12</h1>
   
    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
       <h2>Sorting Values</h2>
       <p>Write a PHP script to Sort an Array with 10 integer numbers.<br>(Note: Don’t use any library functions for sorting.)</p> 
      </div>
    </div>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
       <label class="label">Enter Numbers Seperated by ' , ':</label>
       <textarea class="input" name="numbers" >50,10,40,20,30</textarea>
       <input class="btn" type="submit" name="submit">
    </form>

    <?php
      function printArray($array){
        echo "<ul>";
        foreach($array as $val)
         echo "<li>". $val . "</li>";
        echo "</ul>"; 
      }

      function sortAccending($array){
        
        for($i=0;$i<count($array);$i++)
        {
          for($j=0;$j<count($array);$j++)
          {
           if($array[$i] < $array[$j]){
             $temp=$array[$i];
             $array[$i]=$array[$j];
             $array[$j]=$temp;
           }     
          }  
        }
        printArray($array);
      }
      function sortDecending($array){
        
        for($i=0;$i<count($array);$i++)
        {
          for($j=0;$j<count($array);$j++)
          {
           if($array[$i] > $array[$j]){
             $temp=$array[$i];
             $array[$i]=$array[$j];
             $array[$j]=$temp;
           }     
          }  
        }
        printArray($array);
      }

      function tointArray($numbers){
        $array = array();  
        for($i=0;$i<count($numbers);$i++)
          $array[$i]=intval($numbers[$i]);
        return $array;  
      }

      if(isset($_POST['submit']))
      {
        $numbers = $_POST['numbers'];
        $numbers = explode(',',$numbers);    
        $array = tointArray($numbers);
        // var_dump($array);
        echo "<div class='resultbox'>";
          echo "<p>Entered Value:</p>";  
          printArray($array);
          echo "<p>Sorted in Accending:</p>";
          sortAccending($array);
          echo "<p>Sorted in Decending:</p>";
          sortDecending($array);
        echo "</div>";
      } 
    ?>
  </div>   

  <script src="../css/script.js"></script>
</body>
</html>