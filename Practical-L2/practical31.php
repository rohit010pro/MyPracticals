<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 31</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/header.css" rel="stylesheet">
    <style>
       .in-label{
          line-height:35px;
       }
       input[type=color]{
         margin-left: 46px;
       }
       input[name=text-color]{
         margin-left: 25px;
       }
       .btn{
         margin-top: 25px;
         margin-right: 17px;
       }
       .resultbox{
         margin-top: 40px;
       }
    </style>
</head>
<body>
  <?php include '../header.php';?>
  <div class="container">
    <h1 class="title">Practical 31</h1>
   
    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
       <h2>Festival Day</h2>
       <p>Design a webpage using different GUI objects. Find weekday for Independence day, Republic day and Gandhi jayanti for year enter by user. Display result in table.<br>[Hint: date(), getdate(), mktime()]</p> 
      </div>
    </div>  

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <label class="label">Enter a Year:</label>
      <input class="input" type="number" name="year" min="1900" max="2100" value="2020">
      <label class="in-label">Color 1:</label>
      <input type="color" name="color1" value="#ff6f0f"><br>
      <label class="in-label">Color 2:</label>
      <input type="color" name="color2" value="#ffffff"><br>
      <label class="in-label">Color 3:</label>
      <input type="color" name="color3" value="#1a960f"><br>
      <label class="in-label">Text Color:</label>
      <input type="color" name="text-color" value="#0000ff"><br>
      <input type="submit" name="submit" class="btn">
      <input type="reset" name="reset" class="btn reset">
    </form>

    <?php 
      if(isset($_POST['submit']))
      { 
        if($_POST['year']=="")
         die("Please,Enter a Year.");
         
        $year = intval($_POST['year']);
        $color = array($_POST['color1'],$_POST['color2'],$_POST['color3']);
              
        $textColor = $_POST['text-color'];
        
        date_default_timezone_set("Asia/kolkata");

        $date = array(); 
        $date[] = date("jS  F Y",mktime(0,0,0,1,26,$year));
        $date[] = date("jS  F Y",mktime(0,0,0,8,15,$year));
        $date[] = date("jS  F Y",mktime(0,0,0,10,2,$year)); 

        $festival = array("Republic Day","Independence Day","Gandhi Jayanti");

        $weekday = array();
        $weekday[] = date("l",mktime(0,0,0,1,26,$year));
        $weekday[] = date("l",mktime(0,0,0,8,15,$year));
        $weekday[] = date("l",mktime(0,0,0,10,2,$year));      
        
        // print_r($date);
        // echo "<br>";
        // print_r($festival);
        // echo "<br>";
        // print_r($weekday);
    ?>
    <div class="resultbox">
      <h2>Festival Weekday:</h2>
      <table>
        <thead>
          <tr> 
            <th>Sr.No.</th>
            <th>Date</th>
            <th>Festival Name</th>
            <th>Weekday</th>
          </tr>
        </thead>
        <tbody>
          <?php for($i=0;$i<3;$i++){?>
            <tr style="background-color:<?php echo $color[$i]; ?>; color:<?php echo $textColor?>;">
              <td><?php echo $i+1; ?></td>
              <td><?php echo $date[$i]; ?></td>
              <td><?php echo $festival[$i]; ?></td>
              <td><?php echo $weekday[$i]; ?></td>
            </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
    <?php }?>
  </div>

  <script src="../css/script.js"></script>
</body>
</html>