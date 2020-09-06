<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webpage 2</title>
    <link href="../css/header.css" type="text/css" rel="stylesheet">  
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }
    body{
      padding: 100px 10px 50px 10px;
    }
   .container{
       display: grid;
       grid-template-columns: 1fr; 
       width: 100%;
       height: 100vh;
   }

   .box{
       height:50vh;
       position: relative;  
   }
   .box img{
       position: absolute;
       width: 100%;
       height: 100%;
       object-fit: cover;
       /* z-index: 99; */
       /* transition: z-index 1s ease-in-out; */
   } 
   .box .content{
       position: absolute;
       height: 100%;
       width: 100%;
       color: #fff;
       background-color: rgba(0,0,0,0.7);
       display: flex;
       justify-content: center;
       align-items: center;
       opacity: 0;
       transition: opacity 0.8s ease-in-out;
   }
   .content div{
     text-align: center;
   }
   .container div h2{
      margin: 18px 0;
   }
  
   .container div:nth-child(1):hover .content{
      opacity: 1;
   }
   .container div:nth-child(2):hover .content{
      opacity: 1;
   }
   .container div:nth-child(3):hover .content{
      opacity: 1;
   }
   .container div:nth-child(4):hover .content{
      opacity: 1;
   }
   .container div:nth-child(5):hover .content{
      opacity: 1;
   }
   .container div:nth-child(6):hover .content{
      opacity: 1;
   }

   @media screen and (max-width: 600px){
     .container{
        grid-template-columns: 1fr;
     }
   }
 
   @media screen and (min-width: 768px){
     .container{
        grid-template-columns: 1fr 1fr;
     }
   }

   @media screen and (min-width: 1100px){
     .container{
        grid-template-columns: 1fr 1fr 1fr;
     }
   }

</style>
<body>

 <?php include '../header.php';?>

  <div class="container">
      <div class="box">
          <img src="https://images.unsplash.com/photo-1509966756634-9c23dd6e6815?ixlib=rb-1.2.1&auto=format&fit=crop&w=710&q=80"></img>
          <img src="../image/mandark.jpg">
          <div class="content">
            <div>
              <h2>Image One</h2>
              <p>This Image is Cool.</p>
            </div>
          </div> 
      </div>
      <div class="box">
        <img src="https://images.unsplash.com/photo-1471039497385-b6d6ba609f9c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60">
        <img src="../image/mandark2.jpg">
        <div class="content">
          <div>
            <h2>Image Two</h2>
            <p>This Image is Awesome.</p>
          </div>
        </div> 
    </div>
    <div class="box">
      <img src="https://images.unsplash.com/photo-1560235043-5ca64ce84fdf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60">
        <img src="../image/elephant.jpg">
        <div class="content">
          <div>
            <h2>Image Three</h2>
            <p>This Image is Cool.</p>
          </div>
        </div> 
    </div>
    <div class="box">
      <img src="https://images.unsplash.com/photo-1471893370050-2c1a36cf555c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60">
        <img src="../image/tigerlittle.jpg">
        <div class="content">
          <div>
            <h2>Image Four</h2>
            <p>This Image is Awesome.</p>
          </div>
        </div> 
    </div>
    <div class="box">
        <img src="https://images.unsplash.com/photo-1587502536263-5dda37cd33f0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1400&q=80"></img>
        <img src="../image/boy.jpg">
        <div class="content">
          <div>
            <h2>Image Five</h2>
            <p>This Image is Cool.</p>
          </div>
        </div> 
    </div>
    <div class="box">
      <img src="https://images.unsplash.com/photo-1547651740-ab3937bf700e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60">
      <img src="../image/laptop.jpeg">
       <div class="content">
          <div>
            <h2>Image Six</h2>
            <p>This Image is Awesome.</p>
          </div>
        </div> 
    </div>
  </div>  

  <script src="../css/script.js"></script>
</body>
</html>