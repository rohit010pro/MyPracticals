<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 29</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/header.css" rel="stylesheet">
    <style>
      .caption{
        line-height: 1.5;
        font-size: 1.2rem;
      }
    </style>
</head>
<body>
  <?php include'../header.php';?>
  <div class="container">  
    <h1 class="title">Practical 29</h1>

    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
       <h2>Last Day of Month</h2>
       <p>Find out the name of the last day of every month for current year.</p> 
      </div>
    </div>
    
    <div class="resultbox">
     <p class="caption">Last Day of Every Month in <?php echo date("Y"); ?>.</p>
     <table>
        <thead>
          <tr>
            <th>Month</th>
            <th>Last Day</th>
          </tr>
        </thead> 
        <tbody>
          <?php
            date_default_timezone_set("Asia/kolkata");   
            $year = date("Y");
             for($i=1;$i<=12;$i++)
             { 
                $ldate = date("t",mktime(0,0,0,$i,1,$year));
                $month = date("F",mktime(0,0,0,$i,$ldate,$year)); 
                $day = date("l",mktime(0,0,0,$i,$ldate,$year)); 
                echo "<tr>";
                 echo "<td>".$month."</td>";
                 echo "<td>".$day."</td>";
                echo "</td>";
             }
          ?>
        </tbody>
     </table>
    </div>
  </div>  
  
  <script src="../css/script.js"></script>
</body>
</html>