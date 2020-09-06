<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practical 39</title>
  <link href="../css/header.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
</head>

<body>
  <?php include '../header.php'; ?>

  <div class="container">
    <h1 class="title">Practical 39</h1>

    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
        <h2>Addition of Number</h2>
        <p>Create a PHP webpage which will accept two numbers and a choice for basic mathematical operation(i.e. ADD,DIV,SUB,MUL). Display result of operation, which is selected by user, within the same page. </p>
      </div>
    </div>

    <?php if (isset($_POST['submit'])) goto operation; ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <label class="label">Enter a Number 1:</label>
      <input class="input" type="number" name="num1" value="25">
      <label class="label">Enter a Number 2:</label>
      <input class="input" type="number" name="num2" value="75">
      <label class="label">Select Operation:</label>
      <select class="input" name="operator">
        <option value="" selected disabled>Select</option>
        <option value="+">Addtion</option>
        <option value="-">Substraction</option>
        <option value="*">Multiplication</option>
        <option value="/">Division</option>
      </select>
      <input type="submit" name="submit" class="btn">
    </form>

    <?php
    operation:
    if (isset($_POST['submit'])) {
      echo "<div class='resultbox'>";
      echo "<h2>Result:</h2>";
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];

      if (!isset($_POST['operator'])) {
        echo "<p>Please,Select Operation.</p>";
        goto end;
      }

      $optr = $_POST['operator'];

      echo "<p>Entered Number 1: " . $num1 . "</p>";
      echo "<p>Entered Number 2: " . $num2 . "</p>";

      switch ($optr) {
        case "+":
          echo "<p>Addition: " . ($num1 + $num2) . "</p>";
          break;
        case "-":
          echo "<p>Substraction: " . ($num1 - $num2) . "</p>";
          break;
        case "*":
          echo "<p>Multiplication: " . ($num1 * $num2) . "</p>";
          break;
        case "/":
          echo "<p>Division: " . ($num1 / $num2) . "</p>";
          break;
          // default : echo "<p>Please,Select Operation.</p>";             
      }
      end:
      echo "<a class='btn' href='practical39.php'>Back</a>";
      echo "</div>";
    }
    ?>

  </div>
  <script src="../css/script.js"></script>
</body>

</html>