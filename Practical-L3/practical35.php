<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 35</title>
    <link href="../css/header.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <style>
      .container{
        max-width: 650px;
      }
      form table{
        min-width: 520px;
      }
      form table td:nth-child(1){
        width: 8%;
      }
      form table td:nth-child(2){
        width: 65%;
      }
      .resultbox table{
        min-width: 610px;
      }
    </style>
</head>

<body>
    <?php include '../header.php'; include '../data.php';
          require 'function.php'; 
    ?>

    <div class="container">
      <h1 class="title">Practical 35</h1>

      <div class="go-icon">&#187;</div>
        <div class="question-part">
          <div class="cross-icon">&times;</div>
          <div class="content">
            <h2>BirthDay info.</h2>
            <p>Createa PHP application which will accept name and birthday for 5 different persons on one page and display following outputs on second page.<br>(1) Name of a person (2) Birthday of a person (3) Age of a person (4) Days remaining for next birthday.</p>
          </div>
        </div>
        <?php  if (isset($_POST['submit'])) goto operation; ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          <div class="table-box">
          <table>
            <thead>
                <tr>
                  <th>Sr.</th>
                  <th>Name</th>
                  <th>DOB</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i <= 5; $i++) { ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><input type="text" name="name<?php echo $i; ?>" value="<?php echo $namesArr[$i-1]; ?>"></td>
                        <td><input type="date" name="dob<?php echo $i; ?>" value="<?php echo $dateArr[$i-1]; ?>"></td>
                    </tr>
                <?php } ?>
                <tr>
                  <td colspan="3">
                  <input type="submit" name="submit" class="btn" value="Calculate">
                  </td>
                </tr>
            </tbody>
          </table>
          </div>
        </form>

        <?php operation: ?>
        <div class="resultbox">
          <?php
            if (isset($_POST['submit'])) 
            {
                date_default_timezone_set("Asia/kolkata");

                // $name = array();
                // $dob = array();
                // $age = array();
                // $days = array();

                for ($i = 1; $i <= 5; $i++) {
                    $name[] = $_POST["name$i"];
                    $dob[] = $_POST["dob$i"];
                    $age[] = findAge($dob[$i - 1]);
                    $days[] = findDays($dob[$i - 1]);
                }
            ?>  
            <h2>Result:</h2>  
            <div class="table-box">    
            <table>
              <thead>
                <tr>
                  <th>Sr.No.</th>
                  <th>Name</th>
                  <th>DOB</th>
                  <th>Age</th>
                  <th>Days Remaining</th>
                </tr>
              </thead>
              <tbody>
                <?php for($i=0;$i<5;$i++){
                   echo "<tr>";
                    echo "<td>". ($i+1) ."</td>";
                    echo "<td>". $name[$i] ."</td>";
                    echo "<td>". $dob[$i]  ."</td>";
                    echo "<td>". $age[$i]['year']  ."</td>";
                    echo "<td>". $days[$i] ."</td>";
                   echo "</tr>";
                }?> 
              </tbody>
            </table> 
            </div>               
            <a class="btn" href="practical35.php">Back</a>
            <?php } ?>
        </div>

    </div>
    <script src="../css/script.js"></script>
</body>

</html>