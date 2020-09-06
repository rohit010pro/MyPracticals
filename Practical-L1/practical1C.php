<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webpage 3</title>
    <link href="../css/header.css" type="text/css" rel="stylesheet">  
 <style>
     *{
         font-family: Arial, Helvetica, sans-serif;
     }  
     body{
       padding: 100px 10px 50px 10px;
     }
     table{
         width: 100%;
         min-height: 35vh;
         max-width: 768px;
         margin:20px auto;
         box-shadow: 0px 0px 5px #333;
     }
     table,th,td{
        border: 2px solid #333;
        border-collapse: collapse;
        text-align: center;
        table-layout: fixed;
     }
     th{
         padding: 12px 8px;
         color: #fff;
         background-color: crimson;
     }
     td{
         background-color: #fff;
         padding: 7px 0;
     }
     .box{
         color: #fff;
         background-color:royalblue;
     }
     h1{
         font-size: 3.5rem;
         text-align: center;
         font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
     }
 </style>   
</head>
<body>
  <?php include '../header.php';?>
  
   <h1>My Schedule</h1>  
   <table>
      <thead>
         <tr>
           <th>Day</th>
           <th>Mon</th>
           <th>Tue</th>
           <th>Wed</th>
           <th>Thus</th> 
           <th>Fri</th>
         </tr> 
      </thead>
      <tbody>
        <tr>
           <td>8-9</td>
           <td class="box">Learn</td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
        </tr>
        <tr>
           <td>9-10</td>
           <td></td>
           <td class="box">Practice</td>
           <td></td>
           <td></td>
           <td></td>
        </tr>
        <tr>
          <td>11-1</td>  
          <td></td>
          <td></td>
          <td class="box">Code</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>2-4</td>  
          <td></td>
          <td></td>
          <td></td>
          <td class="box">Play</td>
          <td></td>
        </tr>
        <tr>
            <td>7-9</td>  
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="box">Discuss</td>
        </tr>
       
      </tbody>
   </table>

   <script src="../css/script.js"></script>
</body>
</html>