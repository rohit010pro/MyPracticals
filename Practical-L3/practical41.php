<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practical 41</title>
  <link href="../css/header.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <style>
    .container {
      max-width: 780px;
    }

    table {
      min-width: 650px;
    }
  </style>
</head>

<body>
  <?php include '../header.php';
  include '../data.php';
  require 'function.php'; ?>

  <div class="container">
    <h1 class="title">Practical 41</h1>

    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
        <h2>Details</h2>
        <p>Create a PHP webpage which will accept name, mobile number, city and birthdate for 10 different persons. After submission display list of only that person who live in bharuch and whose age is less than 40years. </p>
      </div>
    </div>

    <?php if (isset($_POST['submit'])) goto operation; ?>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
      <div class="table-box">
        <table>
          <thead>
            <tr>
              <th>Sr.</th>
              <th>Name</th>
              <th>Mobile</th>
              <th>City</th>
              <th>Birthday</th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i = 1; $i <= 10; $i++) { ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><input type="text" name="name<?php echo $i; ?>" value="<?php echo $namesArr[$i - 1]; ?>"></td>
                <td><input type="number" name="mobile<?php echo $i; ?>" value="<?php echo $mobileArr[$i - 1]; ?>"></td>
                <td><input type="text" name="city<?php echo $i; ?>" value="<?php echo $cityArr[$i - 1]; ?>"></td>
                <td><input type="date" name="dob<?php echo $i; ?>" value="<?php echo $dateArr[$i - 1]; ?>"></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <input class="btn" type="submit" name="submit">
      </div>
    </form>

    <?php
      operation:
    if (isset($_POST['submit'])) {
      echo "<div class='resultbox'>";
      date_default_timezone_set("Asia/kolkata");

      $name = array();
      $mobile = array();
      $city = array();
      $dob = array();
      $age = array();

      for ($i = 1; $i <= 10; $i++) {
        $name[] = $_POST["name$i"];
        $mobile[] = $_POST["mobile$i"];
        $city[] = $_POST["city$i"];
        $dob[] = $_POST["dob$i"];
        $age[] = findAge($dob[$i - 1]);
      }
    ?>
      <h2>List of Person who Lived in Bharuch and Under Age 40:</h2>
      <div class="table-box">
        <table>
          <thead>
            <tr>
              <th>Sr.</th>
              <th>Name</th>
              <th>Mobile</th>
              <th>City</th>
              <th>DOB</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $sr=1;
            for ($i = 0; $i < 10; $i++) {
              if (!strcasecmp($city[$i], "bharuch") && $age[$i]['year'] < 40) {
                echo "<tr>";
                echo "<td>" . $sr++ . "</td>";
                echo "<td>" . $name[$i] . "</td>";
                echo "<td>" . $mobile[$i] . "</td>";  
                echo "<td>" . $city[$i] . "</td>";
                echo "<td>" . $dob[$i] . "</td>";
                echo "</tr>";
              }
            }
            ?>
          </tbody>
        </table>
      </div>
      <a class="btn" href="practical41.php">Back</a>
  </div>
<?php } ?>

</div>

<script src="../css/script.js"></script>
</body>

</html>