<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical List-1</title>
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
            margin: auto;
        }
        
        .container h1{
            text-align: center;
            margin-bottom: 25px;
            letter-spacing: 2px;
            font-size: 2.4rem;
        }
        .btn{
            margin: 0;
            padding: 5px 20px;
            text-decoration: none;
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
        a{
            text-decoration: none;
        }
        tr:first-child{
            font-size: 18px;
        }
        tr:first-child p{
           margin: 5px;
           font-size: 15px;
        }
        tr:first-child .btn{
           margin: 1.7px 4px;
           padding: 3px 15px;
        }
        .buttons{
            margin:5px auto 0 auto;
            width: 100px;
        }
    </style>    
</head>
<body>
 <?php include '../header.php';?>
<div class="container">   
 <h1>Practical List-1</h1>
  <table>
    <thead>
      <tr>
        <th>Sr. No.</th>
        <th>Practical</th>
        <th>View</th> 
      </tr>
    </thead>  
    <tbody>
       <tr>
         <td>1</td>
         <td>Practical 1
            <p>Webpage 1</p> 
            <p>Webpage 2</p> 
            <p>Webpage 3</p> 
            <p>Webpage 4</p> 
            <p>Webpage 5</p> 
         </td>
         <td>
            <div class="buttons"> 
             <a class="btn" href="practical1A.php">Page 1</a>
             <a class="btn" href="practical1B.php">Page 2</a>
             <a class="btn" href="practical1C.php">Page 3</a>
             <a class="btn" href="practical1D.php">Page 4</a>
             <a class="btn" href="practical1E.php">Page 5</a>
            </div> 
         </td>
       </tr>
       <tr>
           <td>2</td>
           <td>Practical 2</td>
           <td><a class="btn" href="practical2.php">View</a></td>
       </tr>
       <tr>
           <td>3</td>
           <td>Practical 3</td>
           <td><a class="btn" href="practical3.php">View</a></td>
       </tr>
       <tr>
           <td>4</td>
           <td>Practical 4</td>
           <td><a class="btn" href="practical4.php">View</a></td>
       </tr>
       <tr>
           <td>5</td>
           <td>Practical 5</td>
           <td><a class="btn" href="practical5.php">View</a></td>
       </tr>
       <tr>
           <td>6</td>
           <td>Practical 6</td>
           <td><a class="btn" href="practical6.php">View</a></td>
       </tr>
       <tr>
           <td>7</td>
           <td>Practical 7</td>
           <td><a class="btn" href="practical7.php">View</a></td>
       </tr>
       <tr>
           <td>8</td>
           <td>Practical 8</td>
           <td><a class="btn" href="practical8.php">View</a></td>
       </tr>
       <tr>
           <td>9</td>
           <td>Practical 9</td>
           <td><a class="btn" href="practical9.php">View</a></td>
       </tr>
       <tr>
           <td>10</td>
           <td>Practical 10</td>
           <td><a class="btn" href="practical10.php">View</a></td>
       </tr>
    </tbody>
  </table>
</div> 

<script src="../css/script.js"></script>
</body>
</html>