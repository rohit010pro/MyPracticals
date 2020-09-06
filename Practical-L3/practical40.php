<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practical 40</title>
  <link href="../css/header.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <style>
    .input {
      font-size: 15px;
    }
    .resultbox td{
      background-color: #fff;
    }
    .resultbox p{
      font-size: 1rem;
      line-height: 1.5;
    }
    table{
      min-width: 500px;
    }
  </style>
</head>

<body>
  <?php include '../header.php'; require 'function.php';?>

  <div class="container">
    <h1 class="title">Practical 40</h1>

    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
        <h2>Word Counter</h2>
        <p>Create a PHP webpage which will accept a text through textarea. Find words which are having 2,3 and 4 letters and display result.</p>
      </div>
    </div>

    <?php if (isset($_POST['submit'])) goto operation; ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <label class="label">Enter a Paragraph:</label>
      <textarea class="input" name="para" rows="5">An Apple is red.A Car is blue.A Cat is Black.Talk is cheap show me the code.Old is Gold.Good Day.</textarea>
      <input type="submit" name="submit" class="btn">
    </form>

    <?php
    operation:

    if (isset($_POST['submit'])) {
      echo "<div class='resultbox'>";
      $para = $_POST['para'];

      echo "<h3>Entered Paragraph:</h3>";
      echo "<p>" . $para . "</p>";
      
      $countWordsArr = countWords($para);
    
      // $countAssoc = array("1 Letters" => $countWordsArr[1],
      //                     "2 Letters" => $countWordsArr[2],
      //                     "3 Letters" => $countWordsArr[3],
      //                     "4 Letters" => $countWordsArr[4],
      //                     "5 Letters" => $countWordsArr[5]);

      for($i=1;$i<=5;$i++)
       $countAssoc["$i"." Letters"] = $countWordsArr[$i];

    ?>
      <h2>Result:</h2>
      <div class="table-box">
        <table>
          <thead>
            <tr>
              <th>Type</th>
              <th>Words</th>
              <th>Count</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 0;
            foreach ($countAssoc as $key => $value) {
              echo "<tr>";
              echo "<td>" . $key . "</td>";
              echo "<td>" . implode(" , ", $value) . "</td>";
              echo "<td>" . count($value) . "</td>";
              echo "</tr>";
              $i++;
            }
            ?>
          </tbody>
        </table>
      </div>
      <a class="btn" href="practical40.php">Back</a>
  </div>
<?php } ?>

</div>
<script src="../css/script.js"></script>
</body>

</html>