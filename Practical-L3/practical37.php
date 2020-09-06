<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practical 37</title>
  <link href="../css/header.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <style>
    table{
      min-width: 500px;
    }
    td:nth-child(1) {
      width: 12%;
    }

    td:nth-child(2) {
      width: 28%;
    }

    td label{
        display: inline-block;
        margin-right: 10px;
    }
    td input[type="radio"] {
      display: inline-block;
      margin-right: 7px;
      width: auto;
    }
    td input[type="radio"]:focus{
      outline: none;
    }

    td input[type="number"] {
      width: 80%;
      padding: 6px;
    }
    .btn {
      margin:0;
    }
  </style>
</head>

<body>
  <?php include '../header.php'; include 'function.php';?>
  <div class="container">
    <h1 class="title">Practical 37</h1>

    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
        <h2>Search Previous or Next Prime Number</h2>
        <p>Create a PHP application which will accept a number and searching direction for searching prime number for Five Number on one page and display previous/next prime number according to direction choosen by user.</p>
      </div>
    </div>
    <?php  if (isset($_POST['submit'])) goto operation; 
      $numArr = array(2,5,7,11,17); 
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <div class="table-box">    
      <table>
        <tr>
          <th>Sr</th>
          <th>Enter Number</th>
          <th>Search Direction</th>
        </tr>
        <?php for($i=1;$i<=5;$i++){?>
          <tr>
            <td><?php echo $i;?></td>
            <td><input type="number" name="num<?php echo $i;?>" value="<?php echo $numArr[$i-1];?>"></td>
            <td>
              <label><input type="radio" name="direction<?php echo $i;?>" value="Forward" checked>Forward</label>
              <label><input type="radio" name="direction<?php echo $i;?>" value="Backward">Backward</label>
            </td>
          </tr>
        <?php } ?>
        <tr>
          <td colspan="3">
            <input type="submit" name="submit" class="btn" value="Calculate">
          </td>
        </tr>
      </table>
      </div>
    </form>

    <?php operation: ?>
    <div class="resultbox">
      <?php
      function findPrime($num, $direction)
      {
        if (!strcasecmp($direction, "Forward")) {
          // For Forward Operation
          if($num<=0) $num=1;
          while (++$num) {
            if (isPrime($num))
              return $num;
          }
        } else {
          // For Backward Operation 
          while (--$num) {
            if($num<=1) return 0;
            if (isPrime($num))
              return $num;
          }
        }
      }

      if (isset($_POST['submit'])) {
        $num = array();
        $direction = array();
        $prime = array();
        for ($i = 1; $i <= 5; $i++) {
          $num[] = $_POST["num$i"];
          $direction[] = $_POST["direction$i"];
        }

        for ($i = 0; $i < 5; $i++){
          $p = findPrime($num[$i], $direction[$i]); 
          $prime[] = ($p ? $p : "No Prime");
        }  
      ?>
        <h2>Result:</h2>
        <div class="table-box">
        <table>
          <thead>
            <tr>
              <th>Sr.No.</th>
              <th>Number</th>
              <th>Direction</th>
              <th>Prime</th>
            </tr>
          </thead>
          <tbody>
            <?php
            for ($i = 0; $i < 5; $i++) {
              echo "<tr>";
              echo "<td>" . ($i + 1) . "</td>";
              echo "<td>" . $num[$i] . "</td>";
              echo "<td>" . $direction[$i] . "</td>";
              echo "<td>" . $prime[$i] . "</td>";
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
        </div>
        <a class="btn" href="practical37.php">Back</a>
      <?php } ?>
      <!--End of if Block-->
    </div>

  </div>

  <script src="../css/script.js"></script>
</body>

</html>