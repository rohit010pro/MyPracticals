<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practical 36</title>
  <link href="../css/header.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <style>
    .btn {
      margin-top: 25px;
    }

    .labelBox {
      margin-top: 10px;
    }

    .labelBox label {
      margin-right: 20px;
    }

    input[type=radio] {
      margin-right: 7px;
    }
  </style>
</head>

<body>
  <?php include '../header.php'; include 'function.php';?>
  <div class="container">
    <h1 class="title">Practical 36</h1>

    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
        <h2>Search Previous or Next Prime Number</h2>
        <p>Create a PHP application which will accept a number and searching direction for searching prime number on one page and display previous/next prime number according to direction choosen by user.</p>
      </div>
    </div>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <label class="label">Enter a Number:</label>
      <input class="input" type="number" name="num" value="45">
      <label class="label">Searching Direction:</label>
      <div class="labelBox">
        <label><input type="radio" name="direction" value="Forward" checked>Forward</label>
        <label><input type="radio" name="direction" value="Backward">Backward</label>
      </div>
      <input type="submit" name="submit" class="btn">
    </form>

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
        $num = $_POST['num'];
        $direction = $_POST['direction'];
        echo "<h2>Result:</h2>";
        echo "<p>Entered Number: " . $num . "</p>";
        echo "<p>Searching Direction: " . $direction . "</p>";
        $prime = findPrime($num, $direction);
        echo "<p>Prime Number: " . ($prime ? $prime : "No Prime Number");
      }
      ?>
    </div>

  </div>

  <script src="../css/script.js"></script>
</body>

</html>