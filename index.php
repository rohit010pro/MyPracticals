<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Site</title>
    <link href="css/indexstyle.css" type="text/css" rel="stylesheet">
</head>
<body>
  
  <div class="menu-icon">     
    <div class="bar-1 bar"></div>
    <div class="bar-2 bar"></div>
    <div class="bar-3 bar"></div>
  </div>    
  
  <nav class="side-bar">
    <ul class="menulist">
      <li><a href="index.php" class="menu-item">
      <span class="icon"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
           <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
           <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
          </svg></span>   
      Home</a></li>
      <li><a href="Practical-L1/index.php" class="menu-item">Practical List 1</a></li>  
      <li><a href="Practical-L2/index.php" class="menu-item">Practical List 2</a></li> 
      <li><a href="Practical-L3/index.php" class="menu-item">Practical List 3</a></li>  
    </ul>
  </nav>

  <div class="overlay"></div>

  <section class="showcase" id="home">
    <div class="landing-text">
        <h1>Hi.&nbsp;I'm</h1>
        <h1>Rohit Kanojiya.</h1>
        <p>A Computer Engineering Student...</p>
    </div>
  </section>   

<script>
 window.onload=()=>
 { 
    const menuIcon=document.querySelector('.menu-icon');
    const sideBar=document.querySelector('.side-bar');
    const headList=document.querySelectorAll('.head-list');
    // const subList=document.querySelectorAll('.sublist'); 
    const overlay = document.querySelector('.overlay');

    overlay.addEventListener('click',()=>{
      menuIcon.classList.toggle('cross'); 
      sideBar.classList.toggle('slide');
      overlay.classList.toggle('show');
    });


    menuIcon.addEventListener('click',()=>{
    menuIcon.classList.toggle('cross'); 
    sideBar.classList.toggle('slide');
    overlay.classList.toggle('show');
    });
    
    headList.forEach((hlist)=>{
        hlist.addEventListener('click',()=>{
         let subList  =  hlist.nextElementSibling; 
         if(subList.style.maxHeight)
          subList.style.maxHeight = null;
         else
          subList.style.maxHeight=subList.scrollHeight + "px";
        });
    });

   /* For Practicals */
    // const buttons = document.querySelectorAll('.tab-btn');
    // const contents = document.querySelectorAll('.content');

    // const subTitles = document.querySelectorAll('.sub-title');
    // const subContents = document.querySelectorAll('.sub-content');
   
    // For Main Tabs
    var current = contents[0];
    buttons.forEach((btn,index) => {

        btn.addEventListener('click', () => {
          current.classList.remove('show');
          contents[index].classList.add('show');
          current=contents[index];
        });

    });

    subTitles.forEach((btn,index) =>{

        btn.addEventListener('click',() => {   
          //  subContents[index].classList.toggle('show');
            if(subContents[index].style.maxHeight)
              subContents[index].style.maxHeight= null;
            else
              subContents[index].style.maxHeight = subContents[index].scrollHeight + "px"; 
        });

    });
    
 }  
</script>

</body> 
</html>   