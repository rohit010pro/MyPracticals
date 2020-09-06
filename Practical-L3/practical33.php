<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practical 33</title>
  <link href="../css/header.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
</head>

<body>
  <?php include '../header.php'; require 'function.php';?>

  <div class="container">
    <h1 class="title">Practical 33</h1>

    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
        <h2>BirthDay info.</h2>
        <p>Create a PHP application which will accept name and birthday of a single person on one page and display following outputs on second page.
          <br>(1) Name of a person (2) Birthday of a person (3) Age of a person (4) Days remaining for next birthday. </p>
      </div>
    </div>

    <?php  if (isset($_POST['submit'])) goto operation; ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <label class="label">Enter Your Name:</label>
      <input class="input" type="text" name="name" placeholder="Your Name">
      <label class="label">Select Your DOB:</label>
      <input class="input" type="date" name="dob">
      <input type="submit" name="submit" class="btn">
    </form>
      <?php
      operation:
      if (isset($_POST['submit'])) {
        echo "<div class='resultbox'>";
        date_default_timezone_set("Asia/kolkata");

        $name = $_POST['name'];
        $dob = $_POST['dob'];

        echo "<p>Name: " . $name . "</p>";
        echo "<p>DOB: " . date("d-m-Y", strtotime($dob)) . "</p>";

        $age = findAge($dob);
        echo "<p>Age: " . $age["year"] . " years, " . $age["month"] . " months and " . $age["day"] . " days</p>";

        $days = findDays($dob);
        echo "<p>Days Remaining for Birthday: " . $days . " days</p>";

        echo '<a class="btn" href="practical33.php">Back</a>';
        echo "</div>";
      }
      ?>
    </div>

  </div>
  <script src="../css/script.js"></script>
</body>

</html>