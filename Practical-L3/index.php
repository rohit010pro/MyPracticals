<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical List-3</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link href="../css/header.css" rel="stylesheet" type="text/css">
    <style>
      body{
            padding: 70px 0 50px 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
      }
      .container{
        border: none;
        max-width: 768px;
        padding-bottom: 100px;
      }
      .container table{
          width:100%;
          max-width: 768px;
          margin: auto;
      }
      .container h1{
          text-align: center;
          margin-bottom: 25px;
          letter-spacing: 2px;
          font-size: 2.4rem;
      }
      td:nth-child(1){
        width:20%;
      }
      td:nth-child(2){
        width:45%;
      }
      th{
        padding: 15px 0;
      }
      .btn{
        margin: 0;
        padding: 5px 20px;
        text-decoration: none;
      }
</style>       
</head>
<body>
<?php include '../header.php';?>
  <div class="container">
    <h1>Practical List-3</h1>
    <table>
      <thead>
        <tr>
          <th>Sr. No.</th>
          <th>Practical</th>
          <th>View</th> 
        </tr>
      </thead>  
      <tbody>
        <?php for($i=33;$i<=41;$i++){?>  
          <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo "Practical ".$i; ?></td>
              <td><a class="btn" href="practical<?php echo $i?>.php">View</a></td>   
          </tr> 
          <?php if($i==35){?>
            <tr>
              <td><?php echo $i."(A)"; ?></td>
              <td><?php echo "Practical ".$i."(A)"; ?></td>
              <td><a class="btn" href="practical<?php echo $i?>A.php">View</a></td>   
            </tr>     
          <?php } ?>
        <?php } ?>  
      </tbody>
    </table>
  </div> 

  <script src="../css/script.js"></script>
</body>
</html>