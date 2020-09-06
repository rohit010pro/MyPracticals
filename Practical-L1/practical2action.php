<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="../css/header.css" type="text/css" rel="stylesheet">
  <title>Practical 2(Data)</title>
<style>
 *{
     line-height: 2rem;
     word-spacing: 3px;
     font-family: Arial, Helvetica, sans-serif;
 }
 h1{
   margin-bottom: 20px;
 }
</style>
</head>
<body>

<div class="resultbox">
    <h1>Your Data:</h1>
    <?php

    $name = $_POST['name'];
    echo "Name: ".$name. "<br>";

    $rollNo = $_POST['roll-no'];
    echo "Roll No.: ".$rollNo. "<br>";

    if(isset($_POST['gender'])){
      $gender = $_POST['gender'];
      echo "Gender: ".$gender. "<br>";
    }
    else
      echo "Gender Not Selected"."<br>";  

    if(isset($_POST['sem'])){
      $sem = $_POST['sem'];
      echo "Semester".$sem. "<br>";
    }
    else
      echo "Semester Not Seleected"."<br>";

    if(isset($_POST['dept'])){
      $dept = $_POST['dept'];
      echo "Department: ". $dept. "<br>";
    }
    else
      echo "Department Not Selected"."<br>";

    $games=array();
    if(!empty($_POST['games'])){
        foreach($_POST['games'] as $game) 
        array_push($games,$game);

        echo "Games: ";
        foreach($games as $game)
          echo $game.", ";
        echo "<br>";
          
    }
    else 
      echo "Games Not Selected"."<br>";
      
    $email = $_POST['email'];
    echo "Email: ".$email. "<br>";

    $mobNo = $_POST['mob-no'];
    echo "Mobile No.: ".$mobNo. "<br>";

  ?>

</div>

<script src="../css/script.js"></script>
</body>
</html>