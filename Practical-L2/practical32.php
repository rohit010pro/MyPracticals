<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 32</title>
    <link href="../css/header.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <style>
      td:nth-child(1){
        width: 21%;
      }
      td:nth-child(2){
        width: 50%;
      }
      .resultbox{
         margin-top: 40px;
      }
    </style>
</head>
<body>
  <?php include '../header.php'; ?>
  <div class="container">
   <h1 class="title">Practical 32</h1>

   <div class="go-icon">&#187;</div>
    <div class="question-part">
      <div class="cross-icon">&times;</div>
      <div class="content">
       <h2>Number Type Counter</h2>
       <p>Design a webpage using different GUI Objects. Find count for odd,even and prime numbers among the numbers entered by user. Display result in table.</p> 
      </div>
    </div>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <label class="label">Enter Numbers Seperated by ' , ':</label>
      <textarea class="input" name="nums">1,2,3,4,5,6,7,8,9,10</textarea>
      <input type="submit" name="submit" class="btn">
      <input type="reset" name="reset" class="btn reset">
    </form>

    <?php 
      function countEvenOdd(&$even,&$odd,$array){
        foreach($array as $val)
          $val%2?$odd++:$even++;
      }

      function isPrime($val){
        for($i=2;$i<$val;$i++) 
          if($val%$i==0) return false;   
        return true;   
      }

      function countPrime(&$prime,$array){ 
          foreach($array as $val){
            if($val==1) continue;  
            if(isPrime($val))
              $prime++;
          }  
      } 
      
      function isArmstrong($val){
        $num=$val;
        $sum=0;
        while($num){
          $sum +=($num%10)*($num%10)*($num%10); 
          $num /=10;
        }
        if($val==$sum)
         return true;
        return false;
      }

      function countArmstrong(&$armstrong,$array){
          foreach($array as $val){ 
            if(isArmstrong($val))
              $armstrong++;
          }  
      }

      if(isset($_POST['submit']))
      {
        $nums=$_POST['nums'];
        $nums=trim($nums);
      
        if($nums=="") 
         die('<h2 class="error">Enter Numbers Seperated by Commas ","</h2>');
      
        $array =explode(',',$nums); 

        $countArr=['Even'=> 0,'Odd'=>0,'Prime'=>0,'Armstrong'=>0];
        countEvenOdd($countArr['Even'],$countArr['Odd'],$array);
        countPrime($countArr['Prime'],$array);
        countArmstrong($countArr['Armstrong'],$array);
      
        arsort($countArr);   
    ?>
    <div class="resultbox">
    <table>
      <tbody>
        <tr>
          <th>Sr.No.</th>
          <th>Operation</th>
          <th>Count</th>
        </tr>
      </tbody>
      <tbody>

        <?php $itr=0; foreach($countArr as $key=>$count){ ?>
          <tr>
              <td><?php echo ++$itr; ?></td>
              <td><?php echo $key;   ?></td>
              <td><?php echo $count; ?></td>
          </tr>
        <?php }?> 

      </tbody>
    </table>
    </div>
    <?php }?>
  </div>

  <script src="../css/script.js"></script>
</body>
</html>