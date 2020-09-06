<header id="header">
    <h1 class="heading"><a href="../index.php">DWPD Practicals</a></h1>
    <div class="menu-icon">
        <div class="bar-1 bar"></div>
        <div class="bar-2 bar"></div>
        <div class="bar-3 bar"></div>
    </div>
</header>

<div class="overlay"></div>

<nav class="side-bar">
    <ul class="menulist" style="padding-bottom: 200px;">

        <li>
         <a href="../index.php" class="lead-item"> 
          <span class="icon"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
           <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
           <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
          </svg></span>    
           Home</a>
        </li>

        <li>
            <div class="head-list lead-item">Practical List 1
              <span class="icon"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
              </svg></span> 
            </div>
            <ul class="sublist">
                <li>
                    <div class="head-list">Practical 1
                    <span class="icon"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                       <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg></span>
                    </div>
                    <ul class="sublist">
                        <li><a href="../Practical-L1/practical1A.php">Webpage 1</a></li>
                        <li><a href="../Practical-L1/practical1B.php">Webpage 2</a></li>
                        <li><a href="../Practical-L1/practical1C.php">Webpage 3</a></li>
                        <li><a href="../Practical-L1/practical1D.php">Webpage 4</a></li>
                        <li><a href="../Practical-L1/practical1E.php">Webpage 5</a></li>
                    </ul>
                </li>
                <li><a href="../Practical-L1/practical2.php">Practical 2</a></li>
                <li><a href="../Practical-L1/practical3.php">Practical 3</a></li>
                <li><a href="../Practical-L1/practical4.php">Practical 4</a></li>
                <li><a href="../Practical-L1/practical5.php">Practical 5</a></li>
                <li><a href="../Practical-L1/practical6.php">Practical 6</a></li>
                <li><a href="../Practical-L1/practical7.php">Practical 7</a></li>
                <li><a href="../Practical-L1/practical8.php">Practical 8</a></li>
                <li><a href="../Practical-L1/practical9.php">Practical 9</a></li>
                <li><a href="../Practical-L1/practical10.php">Practical 10</a></li>
            </ul>
        </li>

        <li>
            <div class="head-list lead-item">Practical List 2
              <span class="icon"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
               <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
              </svg></span>
            </div>
            <ul class="sublist">
                <?php for ($i = 11; $i <= 32; $i++) { ?>
                    <li>
                        <a href="../Practical-L2/practical<?php echo $i ?>.php">Practical <?php echo $i ?></a>
                    </li>
                <?php } ?>
            </ul>
        </li>

        <li>
            <div class="head-list lead-item">Practical List 3
              <span class="icon"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
               <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
              </svg></span>
            </div>
            <ul class="sublist">
                <?php for ($i = 33; $i <= 41; $i++) { ?>
                    <li>
                        <a href="../Practical-L3/practical<?php echo $i ?>.php">Practical <?php echo $i ?></a>
                    </li>
                    <?php if($i==35){?>
                       <li>
                        <a href="../Practical-L3/practical35A.php">Practical 35(A)</a>
                       </li> 
                    <?php } ?>    
                <?php } ?>
            </ul>
        </li>

    </ul>
</nav>
