<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/header.css" rel="stylesheet" type="text/css">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <title>Practical 7</title>
</head>
<body>
  <?php include '../header.php';?>

  <div class="container">
   <h1 class="title">Pratical 7</h1>

    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
       <h2>While Loop</h2>
       <p>Write a PHP script to illustrate use of Switch Statment.</p> 
      </div>
    </div>
   
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <label class="label" for="day">Enter a Day Name:</label>  
        <input class="input" id="day" list="days" type="text" name="day" placeholder="sunday"   autocomplete="off">
          <datalist id=days>
            <option value="sunday">
            <option value="monday">
            <option value="tuesday">
            <option value="wednesday">
            <option value="thusday">
            <option value="friday">
            <option value="saturday">  
          </datalist>
        <input class="btn" type="submit" name="submit"> 
      </form>

      <div class="resultbox">
        <?php
          if(isset($_POST['submit']))
          {
              $day=$_POST['day'];
              $day= trim($day);
              $day=strtolower($day);
              switch($day)
              {   
                case 'monday' : echo "<p>=> This day is 1st Day of Week.</p>";
                                break;
                case 'tuesday' : echo "<p>=> This day is 2nd Day of Week.</p>";
                                break;       
                case 'wednesday' : echo "<p>=> This day 3rd Day of Week.</p>";
                                break; 
                case 'thusday' : echo "<p>=> This day is 4th Day of Week.</p>";
                                break;  
                case 'friday' : echo "<p>=> This day is 5th Day of Week.</p>";
                                break;  
                case 'saturday' : echo "<p>=> This day is 6th Day of Week.</p>";
                                break;  
                case 'sunday' : echo "<p>=> This day is 7th Day of Week.</p>";
                              break;                
                default :      echo "Enter Valid Day Name.";
                                                              
              }

          } 
        ?>
      </div>
    
  </div>
    
  <script src="../css/script.js"></script>
</body>
</html>


  