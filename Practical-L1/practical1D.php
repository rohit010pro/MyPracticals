<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webpage 4</title>
    <link href="../css/header.css" type="text/css" rel="stylesheet">  
    <style>
        *{ font-family: Arial, Helvetica, sans-serif;}
        body{
            padding: 90px 10px 50px 10px;
            background-color: #f4f4f4;
        }
        .head{
            text-align: center;
            color: #fff;
            padding: 20px;
            width: 95%;
            margin: auto;
            background-color: crimson;
        }
        .ul-list,.ol-list{
            width: 95%;
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            justify-content:center;
            background-color: #ddd;
            padding: 20px 50px;
            margin-bottom: 20px;
        }
        .ul-list li,.ol-list li{
            color: #111;
            line-height: 35px;
        }
        
        .ul-1{
            list-style-type:circle; } 
        .ul-2{
            list-style-type:square; } 
        .ul-3{
            list-style-type:"\2605"; } 
        .ul-4{
            list-style:"\263A"; } 

        .ol-1{
            list-style-type:lower-greek; } 
        .ol-2{
            list-style-type:lower-latin; } 
        .ol-3{
            list-style-type:upper-roman; } 
        .ol-4{
            list-style-type: lower-roman; } 
         
    @media (max-width:768px){  
        .ul-list,.ol-list{
            display: grid;
            grid-template-columns: 1fr 1fr;
        }    
    }      
    </style>
</head>
<body>

   <?php include '../header.php';?>
   
 <h1 class="head">Unordered Lists</h1>   
  <div class="ul-list">
    <ul class="ul-1">
        <li>List item 1</li>
        <li>List item 2</li>
        <li>List item 3</li>
        <li>List item 4</li>
        <li>List item 5</li>
    </ul>
    <ul class="ul-2">
        <li>List item 1</li>
        <li>List item 2</li>
        <li>List item 3</li>
        <li>List item 4</li>
        <li>List item 5</li>
    </ul>
    <ul class="ul-3">
        <li>List item 1</li>
        <li>List item 2</li>
        <li>List item 3</li>
        <li>List item 4</li>
        <li>List item 5</li>
    </ul>
    <ul class="ul-4">
        <li>List item 1</li>
        <li>List item 2</li>
        <li>List item 3</li>
        <li>List item 4</li>
        <li>List item 5</li>
    </ul>
  </div>

  <h1 class="head">Ordered Lists</h1>   
  <div class="ol-list">
    <ol class="ol-1">
        <li>List item 1</li>
        <li>List item 2</li>
        <li>List item 3</li>
        <li>List item 4</li>
        <li>List item 5</li>
    </ol>
    <ol class="ol-2">
        <li>List item 1</li>
        <li>List item 2</li>
        <li>List item 3</li>
        <li>List item 4</li>
        <li>List item 5</li>
    </ol>
    <ol class="ol-3">
        <li>List item 1</li>
        <li>List item 2</li>
        <li>List item 3</li>
        <li>List item 4</li>
        <li>List item 5</li>
    </ol>
    <ol class="ol-4">
        <li>List item 1</li>
        <li>List item 2</li>
        <li>List item 3</li>
        <li>List item 4</li>
        <li>List item 5</li>
    </ol>
  </div>
 
  <script src="../css/script.js"></script>
</body>
</html>