<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="../css/header.css" type="text/css" rel="stylesheet">
  <title>Practical 2</title>
<style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}
body{   
  padding: 90px 14px 50px 14px;
   width: 100%;
   height: 100vh;
   display: flex;
   justify-content: center;
   align-items: center; 
   background-color: #f4f4f4;
}

form{
    margin:auto;
    width: 100%;
    max-width: 550px;
    padding: 1rem;
    border:2px solid #333;
    border-radius: 5px;
    background-color: #eee;
    margin-bottom: 100px;
}
.title{
   margin:1rem 0 1rem 0;
}

.Input-container{
    display: grid;
    grid-gap: 1rem;
}

.lead-label{
    font-size: 1.1rem;
    display: block;
    margin-bottom: 3px;
}

input,select{
    width: 100%;
    padding: 7px;
    border-radius: 2px;
    border: 1px solid #000;
}
input:focus,select:focus{
   outline:2px solid rgb(91, 167, 253);
    box-shadow: 1px 1px 3px rgb(80, 157, 204), 
              -1px -1px 3px rgb(80, 157, 204);   
} 

input[type=radio], input[type=checkbox]{
    /* display: inline; */
    width: 15px;
}
input[type=radio]:focus, input[type=checkbox]:focus,.btn:focus{
  outline: none;
  box-shadow: none;
}
.gender, .games{
   display: inline;
   margin-right:7px ;
}
.game-group{
    margin: 20px 0;
    position: relative;
}
.game-checks{
    position: absolute;
    height: 100%;
    left: 70px;
    right: 0;
    top:3px;
}
.game-checks label{
    margin: 8px 5px;
}

.btn{
    display: inline-block;
    width: auto;
    font-weight: 520;
    border-radius: 3px;
    color: #fff;
    outline: none;
    padding:8px 17px;
    margin-right: 7px;
    font-size: 0.9rem;
    cursor: pointer;
    box-shadow: 1px 1px 3px rgba(109, 111, 112, 0.212), 
               -1px -1px 3px rgba(109, 111, 112, 0.212);
    transform: none;           
    transition:transform 0.1s ease-in-out;
}
.btn:active{
    transform: scale(0.8);
}

.submit{
    background-color: steelblue;
}
.reset{
    background-color: crimson;
}
.buttons{
    margin: 20px 0;
}

@media (min-width:600px){
    form{
        width: 80%;
    }
 }
</style>  
</head>
<body>
  <?php include '../header.php';?>
  
<form id="Reg-form" action="practical2action.php" method="POST">

  <h1 class="title">Form:</h1>
  
  <div class="Input-container">

    <div>
      <label for="name" class="lead-label">Name:</label> 
      <input id="name" type="text" name="name"  placeholder="Name" autocomplete="off" required>
    </div>
    
    <div>
      <label for="roll" class="lead-label">Roll No.:</label>
      <input id="roll" type="number" name="roll-no" placeholder="Roll No." required>
    </div>
    
    <div>
      <label class="lead-label gender">Gender:</label>
      <label> <input type="radio" name="gender" value="male"> Male</label>
      <label> <input type="radio" name="gender" value="female"> Female</label>
    </div>
  
    <div>
      <label for="sem" class="lead-label">Semester:</label> 
      <select id="sem" name="sem" >
        <option selected disabled>select</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
      </select>  
    </div> 
      
    <div>
      <label for="dept" class="lead-label">Department:</label>
      <select id="dept" name="dept">
        <option selected disabled>select</option>
        <option value="Civil">Civil</option>
        <option value="Computer">Computer</option>
        <option value="Chemical">Chemical</option>
        <option value="Mechnical">Mechnical</option>
        <option value="Electrical">Electrical</option>
        <option value="Environment">Environment</option>
      </select> 
    </div>  
    
    <div class="game-group">
      <label class="lead-label games">Games:</label>
      <div class="game-checks">
        <label> <input type="checkbox" name="games[]" value="Cricket"/> Cricket</label>
        <label> <input type="checkbox" name="games[]" value="Football"/> Football</label>	
        <label> <input type="checkbox" name="games[]" value="Kabaddi"/> Kabaddi</label>	
        <label> <input type="checkbox" name="games[]" value="Vollyball"/> Vollyball</label>	
        <label> <input type="checkbox" name="games[]" value="Khokho"/> Kho Kho</label>
      </div>
    </div>
    
    <div>
      <label for="email" class="lead-label">Email:</label> 
      <input id="email" type="email" name="email" placeholder="abc@gmail.com" autocomplete="off" required>
    </div>

    <div>
      <label for="mob-num" class="lead-label">Mobile No.:</label> 
      <input id="mob" type="number" name="mob-no" placeholder="Mobile No.">
    </div>
    
    <div class="buttons">
      <input class="btn submit" type="submit" value="Submit" name="submit">
      <input class="btn reset" type="reset" value="Reset" name="reset">
    </div>

 </div>
</form>

<script src="../css/script.js"></script>
</body>
</html>