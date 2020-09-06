<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 14</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/header.css" rel="stylesheet">
    <style>
      td:nth-child(1){
        width: 25%;
      }
      td:nth-child(2){
        width: 39%;
      }
      .caption{
        line-height: 1.5;
        font-size: 1.2rem;
      }
    </style>
</head>
<body>
  <?php include '../header.php'; ?>
  <div class="container">
   <h1 class="title">Practical 14</h1>

    <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
       <h2>Square and Cube</h2>
       <p>Write a PHP script which will print all the positive integers whose cube and square are less than 1000 & 500 respectively.</p> 
      </div>
    </div>

    <div class="resultbox">
     <p class="caption">List of Numbers whose Square is less than or equal to 500 and Cube is less than equal to 1000.</p>
      <table>
        <thead>
          <tr>
            <th>Number</th>
            <th>Square</th>
            <th>Cube</th>
          </tr>
        </thead>
        <tbody>
            <?php
              $num=1;
              while($num){
                $sq = $num*$num;
                $cb = $num*$num*$num;
                if($sq<=500 && $cb<=1000){
            ?>  
              <tr>
                <td><?php echo $num; ?></td>
                <td><?php echo $num*$num; ?></td>
                <td><?php echo $num*$num*$num; ?></td>
              </tr>

            <?php }
              else break;
                $num++;
              }
            ?>
        </tbody>
      </table>
    </div>
  </div>  

  <script src="../css/script.js"></script>
</body>
</html>